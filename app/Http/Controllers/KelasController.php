<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $classes = Kelas::where('nama_kelas', 'like', '%' . $request->search . '%')->paginate(5);
            return view('pages.kelas.index', [
                'title'     => 'Data Kelas',
                'classes'   => $classes
            ]);
        } else {
            return view('pages.kelas.index', [
                'title'     => 'Data Kelas',
                'classes'   => Kelas::paginate(5)
            ]);
        }
    }

    public function create()
    {
        return view('pages.kelas.create');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'nama_kelas' => 'required'
        ]);

        Kelas::create($validation);
        return redirect('/kelas');
    }

    public function edit(Kelas $kelas)
    {
        return view('pages.kelas.edit', [
            'title' => 'Edit Kelas',
            'class' => $kelas
        ]);
    }

    public function update(Request $request, Kelas $kelas)
    {
        $validation = $request->validate([
            'nama_kelas' => ''
        ]);

        $kelas->update($validation);
        return redirect('/kelas');
    }

    public function destroy(Kelas $kelas)
    {
        $kelas->delete();
        return redirect('/kelas');
    }
}

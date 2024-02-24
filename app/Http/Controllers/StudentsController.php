<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Students;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {

            $students = Students::where('nama', 'like', '%' . $request->search . '%')->paginate(10);

            return view('pages.student.index', [
                'title' => 'Data Siswa',
                'students' => $students
            ]);

        } else {

            $students = Students::paginate(10);

            return view('pages.student.index', [
                'title' => 'Data Siswa',
                'students' => $students
            ]);
        }
    }

    public function create()
    {
        return view('pages.student.create', [
            'title' => 'Tambah Siswa',
            'classes' => Kelas::all()
        ]);
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'kelas_id' => 'required',
            'nis' => 'numeric|required',
            'nama' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
        ]);

        Students::create($validation);
        return redirect('/student');
    }

    public function edit($id)
    {

        $students = Students::find($id);

        return view('pages.student.edit', [
            'title' => 'Edit Siswa',
            'students' => $students,
            'classes' => Kelas::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'kelas_id' => '',
            'nis' => 'numeric',
            'nama' => '',
            'tanggal_lahir' => 'date',
            'alamat' => '',
        ]);

        Students::where('id', $id)->update($validation);
        return redirect('/student');
    }

    public function destroy($id)
    {
        Students::destroy($id);
        return redirect('/student');
    }
}

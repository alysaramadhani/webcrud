<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function Dashboard() {
        return view('dashboard');
    }

    public function Ekskul() {
        return view('pages.ekskul.ekskul');
    }

    public function About() {
        return view('pages.about.about');
    }

}

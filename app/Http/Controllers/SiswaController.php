<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::get();
        return view ("page.siswa.siswa", compact("siswa"));
    }

    public function create()
    {
        return view("page.siswa.create");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class  KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::get();
        return view("page.kategori.kategori", compact("kategori"));
    }

    public function create()
    {
        return view("page.kategori.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "nama_kategori" => "required",
        ], [
            "nama_kategori.required" => "Wajib diisi abangkuh"
        ]);

        Kategori::create(([
            "nama_kategori" => $request->nama_kategori,
        ]));

        return redirect("/kategori")->with("success", "Berhasi");
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return view("page.kategori.edit", compact("kategori"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "nama_kategori" => "required",
        ], [
            "nama_kategori.required" => "Nama kategori harus diisi"
        ]);

        Kategori::findOrFail($id)->update([
            "nama_kategori" => $request->nama_kategori,
        ]);

        return redirect("/kategori")->with("success", "Berhasil Memperbaharui Data Kategori");
    }

    public function destroy($id)
    {
        Kategori::findOrFail($id)->delete();
        return redirect("/kategori")->with("success", "Berhasil menghapus data kategori");
    }
}



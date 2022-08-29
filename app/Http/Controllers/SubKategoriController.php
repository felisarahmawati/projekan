<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subkategori;

class SubKategoriController extends Controller
{
    public function index()
    {
        $subkategori = Subkategori::all();
        return view('admin.layanan-kategori.subkategori', compact('subkategori'));
    }

    public function post(Request $request)
    {
        $this->validate($request,[
            'kategori' => 'required',
            'subkategori' => 'required',
            // 'gambar' => ' ',
            'deskripsi' => ' '
        ]);

        Subkategori::create([
            'kategori' => $request->input('kategori'),
            'subkategori' => $request->input('subjudul'),
            // 'gambar' => $request->input('gambar'),
            'deskripsi' => $request->input('deskripsi')
        ]);
        return redirect()->back()->with('berhasil', 'Kategori Baru Berhasil Ditambhkan');
    }

    public function edit(Request $request, $id)
    {
        if($request->isMethod('post'))
        {
            $sub = $request->all();

            Subkategori::where(['id' => $id])->update([
                'kategori' => $sub['kategori'],
                'subkategori' => $sub ['subkategori'],
                'deskripsi' => $sub ['deskripsi']
            ]);

            return redirect()->back()->with('berhasil', 'Data Kategori Berhsil Diupdate!!');
        }
    }

    public function show($id)
    {
        Subkategori::where(['id' => $id]);

        return view('admin.layanan-kategori.subkategori');
    }

    public function delete($id=null)
    {
    Subkategori::where(['id'=>$id])->delete();
        return redirect()->back()->with('berhasil', 'Data Kategori Berhsil Dihapus!!');
    }
}

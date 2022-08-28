<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.layanan-kategori.kategori', compact('kategori'));
    }

    public function post(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'subjudul' => 'required',
            // 'gambar' => ' ',
            'kategori' => ' ',
            'deskripsi' => ' '
        ]);

        Kategori::create([
            'judul' => $request->input('judul'),
            'subjudul' => $request->input('subjudul'),
            // 'gambar' => $request->input('gambar'),
            'kategori' => $request->input('kategori'),
            'deskripsi' => $request->input('deskripsi')
        ]);
        return redirect()->back()->with('berhasil', 'Kategori Baru Berhasil Ditambhkan');
    }

    public function edit(Request $request, $id)
    {
        if($request->isMethod('post'))
        {
            $kate = $request->all();

            Kategori::where(['id' => $id])->update([
                'judul' => $kate['judul'],
                'subjudul' => $kate ['subjudul'],
                'kategori' => $kate ['kategori'],
                'deskripsi' => $kate ['deskripsi']
            ]);

            return redirect()->back()->with('berhasil', 'Data Kategori Berhsil Diupdate!!');
        }
    }

    public function show($id)
    {
        Kategori::where(['id' => $id]);

        return view('admin.layanan-kategori.kategori');
    }

    public function delete($id=null)
    {
        Kategori::where(['id'=>$id])->delete();
        return redirect()->back()->with('berhasil', 'Data Kategori Berhsil Dihapus!!');
    }
}

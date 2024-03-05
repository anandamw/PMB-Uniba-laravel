<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master_Berita;
use App\Models\KategoriModel;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'totalInformasi' => KategoriModel::getTotalInformasi__(),
        ];

        return view('admin.kategori.kategori_view', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori.kategori_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create_action(Request $request)
    {
        $data = $request->validate([
            'nama_kategori' => 'required',
        ]);
        KategoriModel::create($data);
        toast('Berhasil Menambahkan Data!', 'success');

        return redirect('/kategori');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataid = KategoriModel::where('id_kategori', $id)->first();
        return view('admin.kategori.kategori_edit', compact('dataid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit_action(Request $request, string $id)
    {
        $kategoris = $request->validate([
            'nama_kategori' => 'required',
        ]);

        KategoriModel::where('id_kategori', $id)->update($kategoris);
        toast('Berhasil Edit Data!', 'success');
        return redirect('kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete_action(string $id)
    {
        KategoriModel::where('id_kategori', $id)->delete();
        toast('Data Berhasil Dihapus!', 'success');
        return redirect('/kategori');
    }
}

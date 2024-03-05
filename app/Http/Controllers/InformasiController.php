<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\KategoriModel;
use App\Models\InformasiModel;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class InformasiController extends Controller
{
    public function index()
    {
        $informasi = InformasiModel::all();
        $kategori = KategoriModel::all();
        return view('admin.informasi.informasi_view', compact('informasi', 'kategori'));
    }

    public function create()
    {
        $dataKategori = KategoriModel::all();

        return view('admin.informasi.informasi_create', compact('dataKategori'));
    }

    public function create_action(Request $request)
    {
        $token = uniqid();
        $token_berita = Str::random('13');
        $file = $request->file('foto_berita');
        $judul_berita = $request->judul_berita;
        $id_kategori = $request->id_kategori;
        $tanggal_berita = $request->tanggal_berita == '' ? date('Y-m-d') : $request->tanggal_berita;
        $isi_berita = $request->isi_berita;
        $status = $request->status;

        $file_name = $token . '.' . $file->getClientOriginalExtension();

        $data = [
            'token_berita' => $token_berita,
            'judul_berita' => $judul_berita,
            'id_kategori' => $id_kategori,
            'tanggal_berita' => $tanggal_berita,
            'isi_berita' => $isi_berita,
            'foto_berita' => $file_name,
            'status' => $status,
        ];

        $file->move('informasi', $file_name);
        InformasiModel::create($data);
        toast('Berhasil Menambahkan Data!', 'success');

        return redirect('/info');
    }
    public function edit(string $id)
    {
        $data = InformasiModel::where('id_berita', $id)->first();
        $dataKategori = KategoriModel::all();
        return view('admin.informasi.informasi_edit', compact('data', 'dataKategori'));
    }

    public function edit_action(Request $request, string $id)
    {
        $token = uniqid();
        $token_berita = Str::random('13');
        $file = $request->file('foto_berita');
        $judul_berita = $request->judul_berita;
        $id_kategori = $request->id_kategori;
        $tanggal_berita = $request->tanggal_berita == '' ? date('Y-m-d') : $request->tanggal_berita;
        $isi_berita = $request->isi_berita;
        $status = $request->status;

        $file_name = $token . '.' . $file->getClientOriginalExtension();

        $data = [
            'token_berita' => $token_berita,
            'judul_berita' => $judul_berita,
            'id_kategori' => $id_kategori,
            'tanggal_berita' => $tanggal_berita,
            'isi_berita' => $isi_berita,
            'foto_berita' => $file_name,
            'status' => $status,
        ];

        $file->move('informasi', $file_name);

        InformasiModel::where('id_berita', $id)->update($data);
        toast('Berhasil Edit Data!', 'success');
        return redirect('/info');
    }
    public function delete_action(string $id)
    {
        InformasiModel::where('id_berita', $id)->delete();
        toast('Data Berhasil Dihapus!', 'success');
        return redirect('/info');
    }
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $token = Str::random(12);

            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $token . '.' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }

    public function detail($id)
    {
        $dataDetail = InformasiModel::getDetailDataBerita__($id)->first();
        return view('admin.informasi.informasi_detail', compact('dataDetail'));
    }
}

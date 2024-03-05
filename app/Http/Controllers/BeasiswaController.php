<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\BeasiswaModel;
use App\Models\InformasiModel;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class BeasiswaController extends Controller
{
    public function index()
    {
        $dataBeasiswa = BeasiswaModel::all();

        return view('admin.beasiswas.beasiswa_view', compact('dataBeasiswa'));
    }

    public function create()
    {
        return view('admin.beasiswas.beasiswa_create');
    }

    public function create_action(Request $request)
    {
        // ddd($request->all());

        $token = uniqid();
        $token_beasiswa = Str::random('12');
        $file = $request->file('foto_beasiswa');
        $nama_beasiswa = $request->nama_beasiswa;
        $deskripsi_beasiswa = $request->deskripsi_beasiswa;

        $file_name = $token . '.' . $file->getClientOriginalExtension();

        $data = [
            'token_beasiswa' => $token_beasiswa,
            'foto_beasiswa' => $file_name,
            'nama_beasiswa' => $nama_beasiswa,
            'deskripsi_beasiswa' => $deskripsi_beasiswa,
        ];

        $file->move('beasiswa', $file_name);
        BeasiswaModel::create($data);
        toast('Berhasil Menambahkan Data!', 'success');

        return redirect('/info-beasiswa');
    }

    public function edit(string $id)
    {
        $datas = BeasiswaModel::where('id_beasiswa', $id)->first();

        return view('admin.beasiswas.beasiswa_edit', compact('datas'));
    }

    public function edit_action(Request $request, string $id)
    {
        $token = uniqid();
        $token_beasiswa = Str::random('12');
        $file = $request->file('foto_beasiswa');
        $nama_beasiswa = $request->nama_beasiswa;
        $deskripsi_beasiswa = $request->deskripsi_beasiswa;

        $file_name = $token . '.' . $file->getClientOriginalExtension();

        $data = [
            'token_beasiswa' => $token_beasiswa,
            'foto_beasiswa' => $file_name,
            'nama_beasiswa' => $nama_beasiswa,
            'deskripsi_beasiswa' => $deskripsi_beasiswa,
        ];

        $file->move('beasiswa', $file_name);

        BeasiswaModel::where('id_beasiswa', $id)->update($data);
        toast('Berhasil Edit Data!', 'success');

        return redirect('/info-beasiswa');
    }

    public function delete_action($id)
    {
        BeasiswaModel::where('id_beasiswa', $id)->delete();
        toast('Data Berhasil Dihapus!', 'success');
        return redirect('/info-beasiswa');
    }

    public function detail($id)
    {
        $dataDetail = BeasiswaModel::getBeasiswaDetail__($id)->first();

        return view('admin.beasiswas.beasiswa_detail', compact('dataDetail'));
    }
}

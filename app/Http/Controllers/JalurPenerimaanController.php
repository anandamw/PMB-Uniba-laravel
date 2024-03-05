<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\JalurPenerimaanModel;
use RealRashid\SweetAlert\Facades\Alert;

class JalurPenerimaanController extends Controller
{
    public function index()
    {
        $DataJalurPenerimaan = JalurPenerimaanModel::all();
        return view('admin.jalurPenerimaan.jalurPenerimaan_view', compact('DataJalurPenerimaan'));
    }
    public function create()
    {
        return view('admin.jalurPenerimaan.jalurPenerimaan_create');
    }
    public function create_action(Request $request)
    {
        $token = uniqid();

        $foto_jalur_file = $request->file('foto_jalur');
        $file_jalur_file = $request->file('file_jalur');

        $nama_jalur = $request->input('nama_jalur');
        $jadwal_mulai = $request->input('jadwal_mulai') ?: now();
        $jadwal_selesai = $request->input('jadwal_selesai') ?: now();

        $foto_jalur = $token . '.' . $foto_jalur_file->getClientOriginalExtension();
        $file_jalur = $token . '.' . $file_jalur_file->getClientOriginalExtension();

        $data = [
            'nama_jalur' => $nama_jalur,
            'jadwal_mulai' => $jadwal_mulai,
            'jadwal_selesai' => $jadwal_selesai,
            'foto_jalur' => $foto_jalur,
            'file_jalur' => $file_jalur,
            'token' => $token,
        ];

        $foto_jalur_file->move('jalur_penerimaan_foto', $foto_jalur);
        $file_jalur_file->move('jalur_penerimaan_file', $file_jalur);

        JalurPenerimaanModel::create($data);
        toast('Berhasil Menambahkan Data!', 'success');

        return redirect('jalur-penerimaan');
    }
    public function edit(string $id)
    {
        $datas = JalurPenerimaanModel::where('id_jalur_penerimaan', $id)->first();
        return view('admin.jalurPenerimaan.jalurPenerimaan_edit', compact('datas'));
    }
    public function edit_action(Request $request, string $id)
    {
        // ddd($request->all());
        $token = uniqid();

        $foto_jalur_file = $request->file('foto_jalur');
        $file_jalur_file = $request->file('file_jalur');

        $nama_jalur = $request->input('nama_jalur');
        $jadwal_mulai = $request->input('jadwal_mulai') ?: now();
        $jadwal_selesai = $request->input('jadwal_selesai') ?: now();

        $foto_jalur = $token . '.' . $foto_jalur_file->getClientOriginalExtension();
        $file_jalur = $token . '.' . $file_jalur_file->getClientOriginalExtension();

        $data = [
            'nama_jalur' => $nama_jalur,
            'jadwal_mulai' => $jadwal_mulai,
            'jadwal_selesai' => $jadwal_selesai,
            'foto_jalur' => $foto_jalur,
            'file_jalur' => $file_jalur,
        ];

        $foto_jalur_file->move('jalur_penerimaan_foto', $foto_jalur);
        $file_jalur_file->move('jalur_penerimaan_file', $file_jalur);

        JalurPenerimaanModel::where('id_jalur_penerimaan', $id)->update($data);
        toast('Berhasil Edit Data!', 'success');

        return redirect('jalur-penerimaan');
    }

    public function delete_action(string $id)
    {
        JalurPenerimaanModel::where('id_jalur_penerimaan', $id)->delete();
        toast('Data Berhasil Dihapus!', 'success');
        return redirect('jalur-penerimaan');
    }

    public function detail($id)
    {
        $dataDetail = JalurPenerimaanModel::getAllJalurPenerimaanDetail__($id)->first();
        return view('admin.jalurPenerimaan.jalurPenerimaan_detail', compact('dataDetail'));
    }
}

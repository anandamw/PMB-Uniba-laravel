<?php

namespace App\Http\Controllers;

use App\Models\TimPmbModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class TimPmbController extends Controller
{
    public function index()
    {
        $datas = TimPmbModel::all();
        return view('admin.teampmbs.teamPmb_view', compact('datas'));
    }

    public function create()
    {
        return view('admin.teampmbs.teamPmb_create');
    }
    public function create_action(Request $request)
    {
        $token = uniqid();
        $file = $request->file('foto_tim');
        $nama_tim = $request->nama_tim;
        $jabatan_tim = $request->jabatan_tim;

        $file_name = $token . '.' . $file->getClientOriginalExtension();

        $data = [
            'nama_tim' => $nama_tim,
            'jabatan_tim' => $jabatan_tim,
            'foto_tim' => $file_name,
            'token' => $token,
        ];

        $file->move('team_pmb', $file_name);

        TimPmbModel::create($data);
        toast('Berhasil Menambahkan Data!', 'success');

        return redirect('/team-pmb');
    }

    public function edit(string $id)
    {
        $datas = TimPmbModel::where('id_team_pmb', $id)->first();
        return view('admin.teampmbs.teamPmb_edit', compact('datas'));
    }
    public function edit_action(Request $request, string $id)
    {
        $token = uniqid();
        $file = $request->file('foto_tim');
        $nama_tim = $request->nama_tim;
        $jabatan_tim = $request->jabatan_tim;

        $file_name = $token . '.' . $file->getClientOriginalExtension();

        $data = [
            'nama_tim' => $nama_tim,
            'jabatan_tim' => $jabatan_tim,
            'foto_tim' => $file_name,
            'token' => $token,
        ];

        $file->move('team_pmb', $file_name);

        TimPmbModel::where('id_team_pmb', $id)->update($data);
        toast('Berhasil Edit Data!', 'success');
        return redirect('/team-pmb');
    }

    public function detail($id)
    {
        $dataDetail = TimPmbModel::teamPmbDetail__($id)->first();

        return view('admin.teampmbs.teamPmb_detail', compact('dataDetail'));
    }

    public function delete_action(string $id)
    {
        TimPmbModel::where('id_team_pmb', $id)->delete();
        toast('Data Berhasil Dihapus!', 'success');
        return redirect('/team-pmb');
    }
}

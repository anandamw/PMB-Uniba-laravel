<?php

namespace App\Http\Controllers;

use App\Models\DashboardModel;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'totalKategori' => DashboardModel::getAllKategori__(),
            'totalInformasi' => DashboardModel::getAllInformasi__(),
            'totalBeasiswa' => DashboardModel::getAllBeasiswa__(),
            'totalJalurPenerimaan' => DashboardModel::getAllJalurPenerimaan__(),
            'totalTimPMB' => DashboardModel::getAllTimPMB__(),
        ];
        toast('Selamat Datang Admin PMB Uniba', 'info');
        return view('admin.dashboard', $data);
    }
}

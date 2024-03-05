<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DashboardModel extends Model
{
    use HasFactory;

    public static function getAllKategori__()
    {
        return DB::table('master_kategori')->get()->count();
    }
    public static function getAllInformasi__()
    {
        return DB::table('master_berita')->get()->count();
    }
    public static function getAllBeasiswa__()
    {
        return DB::table('beasiswa')->get()->count();
    }
    public static function getAllTimPMB__()
    {
        return DB::table('team_pmb')->get()->count();
    }
    public static function getAllJalurPenerimaan__()
    {
        return DB::table('jalur_penerimaan')->get()->count();
    }
}

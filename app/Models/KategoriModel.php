<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KategoriModel extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'master_kategori';
    protected $guarded = [];



    public static function getTotalInformasi__()
    {
        $query = DB::table('master_kategori')
            ->leftJoin('master_berita', 'master_berita.id_kategori', '=', 'master_kategori.id_kategori')
            ->groupBy('master_kategori.nama_kategori', 'master_kategori.id_kategori', 'master_kategori.created_at')
            ->orderBy('master_kategori.id_kategori')
            ->get(['master_kategori.id_kategori', 'master_kategori.nama_kategori', DB::raw('count(master_berita.id_berita) as jumlah_berita'), 'master_kategori.created_at']);
        return $query;
    }
}

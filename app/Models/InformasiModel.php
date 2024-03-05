<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InformasiModel extends Model
{
    use HasFactory;
    protected $table = 'master_berita';
    protected $guarded = [];

    public static function getDetailDataBerita__($token)
    {
        $query = DB::table('master_berita')->join('master_kategori', 'master_berita.id_kategori', '=', 'master_kategori.id_kategori')->where('master_berita.token_berita', $token);
        return $query;
    }
}

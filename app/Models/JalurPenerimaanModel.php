<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JalurPenerimaanModel extends Model
{
    use HasFactory;

    protected $table = 'jalur_penerimaan';
    protected $guarded = [];

    public static function getAllJalurPenerimaanDetail__($token)
    {
        $query = DB::table('jalur_penerimaan')->where('token', $token);
        return $query;
    }
}

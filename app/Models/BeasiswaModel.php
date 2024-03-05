<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BeasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'beasiswa';
    protected $guarded = [];

    public static function getBeasiswaDetail__($token)
    {
        $query = DB::table('beasiswa')->where('token_beasiswa', $token);
        return $query;
    }
}

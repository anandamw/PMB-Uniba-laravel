<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TimPmbModel extends Model
{
    use HasFactory;

    protected $table = 'team_pmb';
    protected $guarded = [];

    public static function teamPmbDetail__($token)
    {
        $query = DB::table('team_pmb')->where('token', $token);
        return $query;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Companys extends Model
{
    use HasFactory;
    protected $table = 'companys';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'owner_id',
    ];
    public static function ownerOf(int|array $owner_id)
    {
        return DB::table('companys')
            ->where('owner_id', '=', $owner_id)
            ->get();
    }
}

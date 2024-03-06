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
        'member',
    ];
    public $timestamps = false;
    public static function memberOf(int|array $member)
    {
        return (new static)::where('member', '=', $member)
            ->get();
    }
}

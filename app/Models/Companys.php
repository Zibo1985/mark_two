<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        return (new static)
        ::where('member', '=', $member)
        ->get();
    }

    public static function remove(int $companyId)
    {
        (new static)::where('id' , $companyId)
        ->delete();
    }
}

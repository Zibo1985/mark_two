<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunden extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'kunden';

    public $timestamps = false;
    protected $fillable = [
        'rfirma',
        'ranrede',
        'rvorname',
        'rname',
        'rstrasse',
        'rplz',
        'rort',
        'remail',
        'rtelefon'
    ];

    public static function search(string $nachname)
    {
        return (new static)::where(['rvorname' , 'rname' ], 'LIKE', ['%' .'franz' .'%' , '%'.'fra'.'%'],)
           
            ->get();
    }
}

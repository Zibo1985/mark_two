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

    public static function search(string|NULL $nachname = ' ',string|NULL $vorname = ' ',string|NULL $firma = " ",string|NULL $ort = " ")
    {
        return self::where('rname' ,'like' , '%' . $nachname . '%')
           ->where('rvorname', 'like' ,  '%' . $vorname . '%')
           ->where('rfirma', 'like', '%' . $firma . '%')
           ->where('rort' ,'like', '%' . $ort . '%')
            ->get();
    }
}

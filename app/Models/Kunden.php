<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

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

    protected static function search(string|Null $vorname, string|Null $nachname, string|Null $firma, string|Null $ort)
    {
        return DB::table('kunden')
            ->where('rvorname', 'like', '%' . $vorname . '%')
            ->where('rname', 'like', '%' . $nachname . '%')
            ->where('rfirma', 'like', '%' . $firma . '%')
            ->where('rort', 'like', '%' . $ort . '%')
            ->get()
            ->toArray();
    }
}

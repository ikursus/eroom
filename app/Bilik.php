<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bilik extends Model
{
    // Rujuk table Bilik
    protected $table = 'bilik';

    // Tetapan column yang boleh diisi maklumat
    // oleh pengguna (mass assignment)
    protected $fillable = [
        'jenis', 'lokasi', 'kapasiti', 'fasiliti'
    ];

}

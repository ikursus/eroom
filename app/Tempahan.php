<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tempahan extends Model
{
    protected $table = 'tempahan';

    protected $fillable = [
      'bilik_id',
      'tarikh_mula',
      'tarikh_tamat',
      'masa',
      'jumlah_jam',
      'aktiviti',
      'nama_tempahan',
      'email_tempahan',
      'telefon_tempahan'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membertim extends Model
{
    public $table = 'membertim';

    protected $guarded = [];

    public function tim()
    {
        return $this->belongsTo(Tim::class);
    }

    public function peran()
    {
        return $this->belongsTo(Peran::class);
    }

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
}
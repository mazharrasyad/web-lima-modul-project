<?php

namespace App\Models;

use Eloquent as Model;

class Mahasiswa extends Model
{
    public $table = 'mahasiswa';

    public function membertims()
    {
        return $this->hasMany(Membertim::class, 'mahasiswa_id', 'id');        
    }
}
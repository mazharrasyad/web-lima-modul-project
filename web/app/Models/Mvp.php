<?php

namespace App\Models;

use Eloquent as Model;

class Mvp extends Model
{
    public $table = 'mvp';

    protected $guarded = [];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
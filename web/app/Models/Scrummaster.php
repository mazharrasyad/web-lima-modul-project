<?php

namespace App\Models;

use Eloquent as Model;

class Scrummaster extends Model
{
    public $table = 'scrummaster';
    
    public function projects()
    {
        return $this->hasMany(Project::class, 'scrummaster_id', 'id');        
    }
}
<?php

namespace App\Models;

use Hamcrest\Arrays\IsArrayContainingKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\TextUI\XmlConfiguration\DefaultConfiguration;

class Role extends Model
{
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}

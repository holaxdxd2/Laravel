<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    public function empleado()
    {
       // return $this->hasOne(User::class, 'foreign_key', 'local_key');
       return $this->hasOne('App\Models\Empleado');
    }
}

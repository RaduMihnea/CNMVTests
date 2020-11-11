<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    use HasFactory;

    public function users(){
        return $this->hasMany(User::class, "class_id", 'id');
    }

    public function tests(){
        return $this->hasMany(Test::class, "class_id", "id");
    }
}

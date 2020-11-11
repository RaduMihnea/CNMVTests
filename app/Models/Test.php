<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    public function schoolClass(){
        return $this->belongsTo(SchoolClass::class, "class_id", 'id');
    }

    public function category(){
        return $this->belongsTo(Category::class, "category_id", "id");
    }

    public function answers(){
        return $this->hasMany(Answer::class, 'answer_id', 'id');
    }
}

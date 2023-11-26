<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function articles(){

        return $this->hasMany(Articles::class, 'category_id');
    }
}

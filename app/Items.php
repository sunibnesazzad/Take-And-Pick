<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Items extends Model
{
    public function category(){
        return $this->hasOne(Category::class);
    }
}

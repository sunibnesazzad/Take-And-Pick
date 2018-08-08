<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Items;

class Category extends Model
{
    public function item(){
        return $this->hasMany(Items::class);
    }
}

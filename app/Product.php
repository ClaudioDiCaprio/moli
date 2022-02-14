<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =['name', 'type', 'cooking_time', 'weight','description','image'];
}

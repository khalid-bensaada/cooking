<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    protected $fillable = [
        'title',
        'description',
        'ingredients',
        'steps',
        'image',
        'category',
    ];
}

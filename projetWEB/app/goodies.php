<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class goodies extends Model
{
    protected $fillable = ['path_image', 'nom', 'description', 'prix'];
}
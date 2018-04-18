<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evenements extends Model
{
    protected $fillable = ['id_event', 'id_User'];
}

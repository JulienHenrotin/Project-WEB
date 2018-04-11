<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class utilisateurs extends Model implements Authenticatable
{
    use Authenticatable;
}

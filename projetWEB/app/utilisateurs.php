<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as BasicAuthenticable;

class utilisateurs extends Model implements Authenticatable
{
    use BasicAuthenticable;

    public function getAuthPassword()
    {
        return $this->MDP;
    }
}

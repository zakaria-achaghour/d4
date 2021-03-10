<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ville extends Model
{
    use SoftDeletes;

    public function clients()
    {
        return $this->hasMany(Client::class);
    }
}

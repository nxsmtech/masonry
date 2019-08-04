<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $guarded = [];

    public function setColor()
    {
        return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    }
}
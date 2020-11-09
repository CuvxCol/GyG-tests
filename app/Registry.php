<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registry extends Model
{
    protected $fillable = ['surveyed_id','quiz_id'];
    protected $table = 'registry';
}

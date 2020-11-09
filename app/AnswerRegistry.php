<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerRegistry extends Model
{
    protected $fillable = ['registry_id','question_id','answer_id','response_time'];
    protected $table = 'answer_registry';
}

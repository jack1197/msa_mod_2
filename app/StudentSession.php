<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentSession extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'student_id');
    }

    public function classsession()
    {
        return $this->belongsTo('App\ClassSession', 'class_id');
    }

    protected $casts = [
        'needs_help' => 'boolean',
    ];
}

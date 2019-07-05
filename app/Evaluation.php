<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends pivot
{
    protected $table = 'evaluation';
    public $timestamps = false;
    public $incrementing = true;

    protected $fillable = [
        'student_id',
        'discipline_id',
        'assessment',
    ];

    public function student()
    {
        return $this->belongsToMany('App\Student', 'student');
    }

    public function discipline()
    {
        return $this->belongsToMany('App\Discipline', 'discipline');
    }
}

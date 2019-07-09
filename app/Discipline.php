<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    protected $table = 'Discipline';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
    ];

    public function student()
    {
        return $this->belongsToMany('App\Student', 'evaluation')->using('App\Evaluation')
            ->withPivot('assessment');
    }

}

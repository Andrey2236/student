<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
      'name',
      'surname',
      'patronymic',
      'data',
      'group_id',
    ];

    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    public function discipline()
    {
        return $this->belongsToMany('App\Discipline', 'evaluation')->using('App\Evaluation')
            ->withPivot('assessment');
    }

}

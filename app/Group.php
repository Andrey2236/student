<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'group';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
    ];

    public function student()
    {
        return $this->hasMany ('App\Student');
    }

}

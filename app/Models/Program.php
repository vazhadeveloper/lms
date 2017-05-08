<?php

namespace App\Models;

use App\Traits\UuidModelTrait;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use UuidModelTrait;

    protected $with = ['faculty'];

    protected $fillable = [
        'name', 'faculty_id', 'mandatorty_credits', 'optional_credits',
    ];

    protected $casts = [
        'name'               => 'string',
        'mandatorty_credits' => 'integer',
        'optional_credits'   => 'integer',
    ];

    public function faculty()
    {
        return $this->belongsTo('App\Models\Faculty');
    }

    public function programCourses()
    {
        return $this->hasMany('App\Models\ProgramCourse');
    }
}

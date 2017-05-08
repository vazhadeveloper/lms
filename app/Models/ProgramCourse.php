<?php

namespace App\Models;

use App\Traits\UuidModelTrait;
use Illuminate\Database\Eloquent\Model;

class ProgramCourse extends Model
{
    use UuidModelTrait;

    protected $fillable = [
        'course_id', 'program_id', 'type',
    ];

    public function program()
    {
        return $this->belongsTo('App\Models\Program');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }
}

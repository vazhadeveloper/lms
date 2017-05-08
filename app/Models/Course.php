<?php

namespace App\Models;

use App\Traits\UuidModelTrait;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use UuidModelTrait;

    protected $fillable = [
        'name', 'credits',
    ];

    protected $casts = [
        'name'    => 'string',
        'credits' => 'integer',
    ];

    public function coursePrograms()
    {
        return $this->hasMany('App\Models\ProgramCourse');
    }
}

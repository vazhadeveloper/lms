<?php

namespace App\Models;

use App\Traits\UuidModelTrait;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use UuidModelTrait;

    protected $fillable = [
        'name',
    ];

    protected $casts = [
        'name' => 'string',
    ];

    public function programs()
    {
        return $this->hasMany('App\Models\Program');
    }
}

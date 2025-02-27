<?php

namespace App\Modules\Unit\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaseUnit extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'code',
        'name',
    ];
}

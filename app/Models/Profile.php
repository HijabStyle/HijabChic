<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'nim',
        'class',
        'univ',
        'email',
        'photo',
    ];
}

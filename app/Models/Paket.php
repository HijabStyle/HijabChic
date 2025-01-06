<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $fillable = [
        'name',
        'price',
        'benefit_1',
        'benefit_2',
    ];
}

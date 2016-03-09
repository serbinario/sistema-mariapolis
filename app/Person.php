<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'name',
        'age',
        'city',
        'uf',
        'phone',
        'sex',
        'isSubscriber'
    ];
}

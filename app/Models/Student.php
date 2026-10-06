<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // что может вводить
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'birthday'
    ];


    // что не может вводить - лучше на демоэкзамене
    // protected $guarded = [];
}

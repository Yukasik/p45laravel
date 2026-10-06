<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;


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

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartner extends Model
{
    protected $table = 'apartners';
    protected $fillable = ['username','name','avatar','email','phone','password','birthday','address','star','specialized','city','experience'];
}

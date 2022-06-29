<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonelInformation extends Model
{
    protected $table = 'personelinformations';
    protected $fillable = ['name','dob','phone','email','address','instagram','linkedin','image'];
}

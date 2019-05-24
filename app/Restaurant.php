<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = ['social_name','fantasy_name','cnpj','information','email'];
}

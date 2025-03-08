<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $fillable = ['full_name','number','email','address','base','protein','second_choose','sauce','drinks','payment'];
}

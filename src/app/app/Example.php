<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    protected $table = "Examples";
    protected $fillable = ['value'];
    protected $primaryKey = 'id_example';
}

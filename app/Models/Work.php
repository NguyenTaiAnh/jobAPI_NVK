<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table='work';
    protected $fillable= [
        'ID_Work',
        'WName'
    ];
}
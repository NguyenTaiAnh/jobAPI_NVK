<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    protected $table='style';
    protected $fillable=[
        'ID_Style',
        'SName'
    ];
}

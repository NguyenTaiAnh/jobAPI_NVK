<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    protected $table='recruitment';
    protected $fillable=[
        'ID_Recruitment',
        'ID_Recruiter',
        'ID_Job',
        'ID_Style',
        'Title',
        'Descrip',
        'Interest',
        'Request',
        'SalaryMin',
        'SalaryMax',
        'Place'
    ];
}

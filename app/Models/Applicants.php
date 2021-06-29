<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicants extends Model
{
    protected $table='applicants';
    protected $fillable=[
        'ID_Applicants',
        'Email',
        'FirstName',
        'LastName',
        'Gender',
        'PhoneNumber',
        'DateOfBirth',
        'Locat',
        'Assess',
        'CV',
        'Avatar',
        'Cover',
    ];
}

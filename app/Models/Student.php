<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'enrollment',
        'CPF',
        'Name',
        'motherName',
        'fatherName',
        'birthday',
        'gender',
        'email',
        'cellphone',
        'githubProfile',
        'campusName',
        'courseName',
        'currentPeriod',
        'group',
    ];
}

<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'enrollment',
        'CPF',
        'name',
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

    protected $guarded = [
        'id',
    ];

}

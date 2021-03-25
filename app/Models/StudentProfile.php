<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $tables = 'student_profile';

    protected $fillable = [
        'user_id',
		'gender',
		'birthday',
		'father_name',
		'mother_name',
		'current_school',
		'interest',
		'avatar'
    ];
}

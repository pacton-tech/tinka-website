<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherProfile extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $table = 'teacher_profile';

    protected $fillable = [
        'user_id',
		'gender',
		'birthday',
		'qualification',
		'teaching',
		'current_school',
		'current_tuition',
		'subject',
		'avatar',
		'video'
    ];
}

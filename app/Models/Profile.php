<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'user_id',
		'role',
		'gender',
		'birthday',
		'qualification',
		'teaching',
		'current_school',
		'current_tuition',
		'subject',
		'avatar'
    ];
}

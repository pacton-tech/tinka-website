<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;

    protected $fillable = [
        'hall_id',
        'uuid',
        'name',
        'description',
        'has_image',
        'has_bg_image',
        'private',
        'username',
        'follower_num',
        'content_num',
        'version'
    ];

    public function users()
    {
        return $this->hasMany(AppLogin::class, 'username', 'ussername');
    }
}

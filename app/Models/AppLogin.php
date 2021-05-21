<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppLogin extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'username', 'password',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class, 'user_id', 'id')->orderBy('id', 'DESC');
    }
}

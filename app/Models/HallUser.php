<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HallUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'hall_uuid',
        'username'
    ];

    public function apps()
    {
        return $this->belongsTo(AppLogin::class);
    }

    public function halls()
    {
        return $this->belongsTo(Hall::class, 'hall_uuid', 'uuid');
    }
}

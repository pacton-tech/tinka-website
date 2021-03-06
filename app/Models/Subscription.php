<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Subscription extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'student_name',
        'plan_id',
        'subjects',
        'starts_at',
        'ends_at',
        'payment_id'
    ];

    protected $casts = [
        'subjects' => 'array'
    ];

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'plan_id',
        'starts_at',
        'ends_at',
        'payment_id'
    ];

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}

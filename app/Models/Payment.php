<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'billplz_id',
        'user_id',
        'plan_id',
        'amount',
        'paid',
        'status',
        'url',
        'description',
        'amount'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function subscription()
    {
        return $this->belongsTo(Subscription::class, 'id', 'payment_id');
    }
}

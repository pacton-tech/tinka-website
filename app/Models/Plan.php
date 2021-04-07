<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
		'name',
		'description',
		'category',
		'is_active',
		'price',
		'signup_fee',
		'currency',
		'trial_period',
		'trial_interval',
		'invoice_period',
		'invoice_interval',
		'sort_order'
    ];
}

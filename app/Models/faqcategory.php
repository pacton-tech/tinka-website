<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faqcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'categoryname'
    ];
    public function faqcategories()
    {
        return $this->belongsTo('App\Models\faq');
    }
}

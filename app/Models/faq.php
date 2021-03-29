<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faq extends Model
{
    use HasFactory;
    protected $fillable = [
        'question', 'answer', 'categoryid', 'subcategoryid'
    ];

    public function categories()
    {
        return $this->belongsTo('App\Models\faqcategory');
    }
    public function subcategories()
    {
        return $this->belongsTo('App\Models\faqsubcategory');
    }
}


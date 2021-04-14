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
        return $this->hasOne('App\Models\faqcategory', 'id', 'categoryid');
    }
    public function subcategories()
    {
        return $this->hasOne('App\Models\faqsubcategory', 'id', 'subcategoryid');
    }
}


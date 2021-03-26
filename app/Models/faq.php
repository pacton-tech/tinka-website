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
        return hasOneThrough(Faq::class, Category::class);
    }
    public function subcategories()
    {
        return hasOneThrough(Faq::class, Subcategory::class);
    }
}


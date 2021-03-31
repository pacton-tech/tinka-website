<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faqsubcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'subcategoryname'
    ];
    public function faqsubcategories()
    {
        return $this->belongsTo('App\Models\faq');
    }
}

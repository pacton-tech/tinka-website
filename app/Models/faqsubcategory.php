<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faqsubcategory extends Model
{
    use HasFactory;
    public function faqsubcategories()
    {
        return $this->hasOne('App\Models\faq');
    }
}

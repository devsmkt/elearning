<?php

namespace App\Models;

use App\Traits\GlobalStatus;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use GlobalStatus;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(BookCategory::class, 'book_category_id');
    }

    public function chapters()
    {
        return $this->hasMany(BookChapter::class);
    }
}

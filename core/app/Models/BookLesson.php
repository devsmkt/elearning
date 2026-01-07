<?php

namespace App\Models;

use App\Traits\GlobalStatus;
use Illuminate\Database\Eloquent\Model;

class BookLesson extends Model
{
    use GlobalStatus;

    protected $guarded = ['id'];

    public function chapter()
    {
        return $this->belongsTo(BookChapter::class, 'book_chapter_id');
    }
}

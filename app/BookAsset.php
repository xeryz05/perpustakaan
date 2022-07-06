<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookAsset extends Model
{
    protected $fillable = [
        'pdfs', 'books_id'
    ];

    protected $hidden = [

    ];

    public function book() {
        return $this->belongsTo(Book::class, 'books_id', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
     protected $fillable = [
        'books_id','users_id'
    ];

    protected $hidden = [];

    public function book()
    {
        return $this->hasOne(Book::class, 'id', 'books_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}

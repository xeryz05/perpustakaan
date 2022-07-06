<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Read extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'books_id', 'users_id'
    ];

    protected $hidden = [

    ];

    public function book() {
        return $this->hasOne(Book::class, 'id','books_id');
    }

    public function author() {
        return $this->belongsTo(User::class, 'author_id','id');
    }
}

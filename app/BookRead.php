<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookRead extends Model
{
    protected $fillable = [
        'id',
        'users_id',
        'books_id',
        'read_status', //Read and unRead
    ];

    protected $hidden = [

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}

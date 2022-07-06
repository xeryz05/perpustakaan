<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    protected $fillable = [
        'avatars', 'users_id'
    ];

    protected $hidden = [

    ];

    public function user() {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}

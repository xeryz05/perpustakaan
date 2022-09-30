<?php

namespace App;

use App\Tamu;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    protected $table = 'tamus';
    protected $guarded = [];

    public function getUpdatedAtAttribute($value)
    {
        return $this->attributes['updated_at'] = Carbon::parse($value)->diffForHumans();
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}

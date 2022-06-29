<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Book extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name','author','categories_id', 'description' , 'slug','pdf'
    ];

    protected $hidden = [

    ];

    // // public function galleries() {
    // //     return $this->hasMany(BookGallery::class, 'book_id', 'id')->withTrashed();
    // // }

    // public function user() {
    //     return $this->hasOne(User::class, 'id', 'users_id');
    // }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}

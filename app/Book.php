<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Book extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name','author','categories_id', 'description' , 'slug','photo','pdf'
    ];

    protected $hidden = [

    ];

    // public function pdf(){
    //     return $this->hasMany(BookAsset::class, 'books_id', 'id' );
    // }

    public function author() {
        return $this->hasOne(User::class, 'id', 'author_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }
}

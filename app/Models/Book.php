<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'category_id',
        'author_id',
        'publishing_year',
        'republish',
        'isbn_id',
        'recap',
        'place_publication',
        'license',
        'img',
        'book_number',
        'language'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
}

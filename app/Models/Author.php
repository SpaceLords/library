<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model {
    protected $table = 'authors';

    protected $fillable = [
        'full_name'
    ];

    public function books() {
        return $this->belongsToMany(
            Book::class,
            'books_authors',
            'author_id',
            'book_id');
    }
}

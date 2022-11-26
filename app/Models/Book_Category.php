<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_Category extends Model {
    use HasFactory;

    public function oneBook() {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }

    public function oneCategory() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}

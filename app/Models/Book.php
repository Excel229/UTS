<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model {
    use HasFactory;

    public function onePublisher() {
        return $this->belongsTo(Publisher::class, 'publisher_id', 'id');
    }

    public function manyCategory() {
        return $this->hasMany(Book_Category::class, 'category_id', 'id',);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    use HasFactory;

    public function manyBook() {
        return $this->hasMany(Book_Category::class, "category_id", "id");
    }
}

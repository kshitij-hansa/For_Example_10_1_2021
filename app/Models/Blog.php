<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    // protected $fillable = ['name','categorie_id'];
    protected $table = 'categories';
    protected $fillable = ['name',];
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}

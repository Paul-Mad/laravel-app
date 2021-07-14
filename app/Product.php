<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'exclusive'
    ];

    protected $date = [
        'deleted_at',
    ];
    
    // cria relacionamento da table produto com a categoria
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

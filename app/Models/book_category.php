<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class book_category extends Model
{
    use HasFactory;

    protected $table ='book_category';

    protected $fillable =[
        'book_id',
        'category_id'
    ];
    public function book() :BelongsTo{
        return $this->belongsTo(Books::class,'book_id','id');
    }

    public function category() :BelongsTo{
        return $this->belongsTo(category::class,'category_id','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class books extends Model
{
    use HasFactory;
    protected $table = 'books';

    protected $fillable = [
        'publisher_id',
        'title',
        'author',
        'year',
        'synopsis',
        'image',
    ];

    public function publisher(): BelongsTo
    {
        return $this->belongsTo(Publishers::class, 'publisher_id', 'id');
    }
    public function categories(): HasMany
    {
        return $this->hasMany(BookCategory::class, 'book_id', 'id');
    }
}

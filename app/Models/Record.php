<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Record extends Model
{
    use HasFactory;

    // public function users(): HasMany
    // {
    //     return $this->hasMany(User::class);
    // }
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}

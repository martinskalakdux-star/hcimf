<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Program extends Model
{
    protected $fillable =[
        'title',
        'content',
    ];

    public function artists(): BelongsToMany
    {
        return $this->belongsToMany(Artist::class);
    }
}

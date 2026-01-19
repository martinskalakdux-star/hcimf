<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Artist extends Model
{
    protected $fillable =[
        'name',
        'image',
        'bio',
    ];

    public function programs(): BelongsToMany
    {
        return $this->belongsToMany(Program::class);
    }
}

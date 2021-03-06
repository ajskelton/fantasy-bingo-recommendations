<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Square extends Model
{
    use HasFactory;

    protected $with = ['books'];

    public function books(): \Illuminate\Database\Eloquent\Relations\BelongsToMany {
        return $this->belongsToMany(Book::class)->withPivot('hard_mode');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations as Relation;

class Book extends Model
{
    use HasFactory;

    protected $with = [ 'author' ];

    public function author(): Relation\BelongsTo {
        return $this->belongsTo(Author::class);
    }

    public function squares(): Relation\BelongsToMany
    {
        return $this->belongsToMany(Square::class)->withPivot('hard_mode');
    }
}

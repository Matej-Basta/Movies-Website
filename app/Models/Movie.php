<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MovieType;

class Movie extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(MovieType::class);
    }
}

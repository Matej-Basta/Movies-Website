<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MovieType;
use App\Models\Genre;
use App\Models\Language;
use App\Models\MovieStatus;
use App\Models\Certification;
use App\Models\OriginCountry;
use App\Models\Person;
use App\Models\Review;

class Movie extends Model
{
    use HasFactory;

    public function movieType()
    {
        return $this->belongsTo(MovieType::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }

    public function status()
    {
        return $this->hasOne(MovieStatus::class);
    }

    public function certification()
    {
        return $this->hasOne(Certification::class);
    }

    public function originCountry()
    {
        return $this->belongsToMany(OriginCountry::class);
    }

    public function people()
    {
        return $this->belongsToMany(Person::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}

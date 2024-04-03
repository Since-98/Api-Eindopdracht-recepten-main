<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gebruiker extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['naam'];

    // protected $with = ['gebruiker'];

    public function gebruiker()
    {
        return $this->hasMany(Gebruiker::class, 'recept_id', 'id');
    }
}



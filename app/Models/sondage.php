<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sondage extends Model
{
    use HasFactory;
    protected $fillable = [
        'prenom',
        'nom',
        'email',
        'tel',
        'choix',
        'pourquoi'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professore extends Model
{
    use HasFactory;

    protected $fillable = ['nome','email','genero','data_nascimento','telefone'];
}

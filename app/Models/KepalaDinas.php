<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KepalaDinas extends Model
{
    use HasFactory;

    protected $fillable = ['sambutan', 'photo'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collegian extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'static_numbers', 'numbers', 'known_numbers', 'document_status', 'document_list'];
}

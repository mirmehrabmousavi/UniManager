<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'number', 'address', 'melli_code', 'static_number', 'known_number'];
}

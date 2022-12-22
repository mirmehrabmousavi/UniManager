<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketerSubclass extends Model
{
    use HasFactory;

    protected $fillable = ['marketer', 'idd_subclass', 'full_name_subclass', 'date', 'paid'];
}

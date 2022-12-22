<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['collegian', 'read_status', 'date', 'contact_platform', 'contact_reason', 'contact_description'];
}

<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function uinversities()
    {
        return $this->belongsToMany(University::class, 'uni_section');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    public $table = 'universities';

    protected $fillable = ['name', 'image', 'address'];

    public function collegians()
    {
        return $this->hasMany(Collegian::class);
    }

    public function majors()
    {
        return $this->belongsToMany(Major::class, 'uni_major');
    }

    public function sections()
    {
        return $this->belongsToMany(Section::class, 'uni_section');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    public $table = 'universities';

    protected $fillable = ['name', 'image', 'address', 'majors', 'sections'];

    /**
     * Set the categories
     *
     */
    public function setMajorsAttribute($value)
    {
        $this->attributes['majors'] = json_encode($value);
    }

    /**
     * Get the categories
     *
     */
    public function getMajorsAttribute($value)
    {
        return $this->attributes['majors'] = json_decode($value);
    }

    /**
     * Set the categories
     *
     */
    public function setSectionsAttribute($value)
    {
        $this->attributes['sections'] = json_encode($value);
    }

    /**
     * Get the categories
     *
     */
    public function getSectionsAttribute($value)
    {
        return $this->attributes['sections'] = json_decode($value);
    }

    public function collegians()
    {
        return $this->hasMany(Collegian::class);
    }

    public function majors()
    {
        return $this->belongsToMany(Major::class, 'uni_major');
    }
}

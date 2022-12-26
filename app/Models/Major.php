<?php

namespace App\Models;

use App\Http\Requests\UniversityRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function universities()
    {
        return $this->belongsToMany(University::class, 'uni_major');
    }
}

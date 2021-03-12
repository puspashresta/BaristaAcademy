<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $fillable=['image','cName','cType','price','description'];
    use HasFactory;

    // public function registrations()
    // {
    //     return $this->hasMany(Registration::class);
    // }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;


    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'image'];

    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }

}
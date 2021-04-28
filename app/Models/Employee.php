<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    public function setEmailAttribute($value){
        $this->attributes['email'] = strtolower($value);
        //return strtoupper($value);
    }

    public function getNameAttribute($value){
        return strtoupper($value);
    }

    public function getEmailAttribute($value){
        return strtoupper($value);
    }
}

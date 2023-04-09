<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    public function employee(){
        return $this->hasMany(Employee::class);
    }

    public function ceo(){
        return $this->belongsTo(Ceo::class);
    }
}

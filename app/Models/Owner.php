<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{

    use HasFactory;
    protected $fillable = ['name','phoneNo','email'];

    public function propertys()
    {
        return $this->hasMany(Property::class);
    }
}

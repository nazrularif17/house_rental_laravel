<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'propertys';
    use HasFactory;
    protected $fillable = [
        'ownerID',
        'propertyImage',
        'propertyTitle',
        'propertyType',
        'propertyPrice',
        'propertyRange',
        'propertyAddress',
        'propertyFurnishings',
        'propertyDesc',
        'propertyStatus',
    ];

    public function owner()
    {
        return $this->belongsTo(Owner::class, 'ownerID');
    }
}

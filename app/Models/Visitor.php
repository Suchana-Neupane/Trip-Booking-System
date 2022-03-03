<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'address',
        'primarycontact',
        'secondarycontact',
        'guides_id',
        'vehicles_id',
        'packages_id'
    ];

    public function guides()
    {
        return $this->belongsTo(Guide::class, 'guides_id');
    }

 public function vehicles()
    {
        return $this->belongsTo(Vehicle::class, 'vehicles_id');
    }
    public function packages()
    {
        return $this->belongsTo(Package::class, 'packages_id');
    }
}

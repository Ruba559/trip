<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Place;

class ServiceManegar extends Authenticatable
{
    use HasFactory;

    
    protected $guard = 'serviceManegar';
    
    protected $fillable = [
        'first_name'  ,
        'last_name'    ,
        'Email '       ,
        'phone_number' ,
        'password'   ,
        'is_a_proven',
         'photo_certificate',
        'created_at ',
        'updated_at ',
        
];

public function place()
{
   return $this->belongsTo(Place::class);
}

}

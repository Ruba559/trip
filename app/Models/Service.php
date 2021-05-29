<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Place;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'place_id'  ,
        'price'    ,
        'service_name',
        'created_at',
        'updated_at',
  ];

  public function place()
{
   return $this->belongsTo(Place::class ,'place_id');
}
}

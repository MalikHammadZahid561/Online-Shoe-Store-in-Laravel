<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    

    use HasFactory;
    protected $guarded =[];
    protected $fillable =['id','name','email', 'telNo','city_id','address'];
    public function city()
 {
 return $this->belongsTo(City::class);
 }
}

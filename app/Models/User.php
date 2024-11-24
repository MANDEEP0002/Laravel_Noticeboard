<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
     use HasFactory;

     protected $table = "users";
      
   
     protected $fillable = [
        'name',
        'password',
        'email'
      ];
  
    //   public function products()
    //   {
    //       return $this->hasMany(Product::class, 'categories_id');
    //   }
}

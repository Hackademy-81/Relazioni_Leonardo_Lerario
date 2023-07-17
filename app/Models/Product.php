<?php

namespace App\Models;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable= ['name', 'body', 'price', 'img', 'user_id'];
   
    //funzione di relazione
    public function user(){
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;
class Post extends Model
{
    use HasFactory;
    /*RELATION UN POST APPARTIENT A UN UTILISATEUR*/
    public function user(){
        return $this->belongsTo(User::class);
    }
    /*RELATION UN POST APPARTIENT A UNE CATEGORY*/
    public function category(){
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $guarded = []; #ENLEVE LA PROTECTION SUR TOUS LES CHAMPS

    /*RELATION UN POST APPARTIENT A UN UTILISATEUR*/
    public function user(){
        return $this->belongsTo(User::class);
    }
    /*RELATION UN POST APPARTIENT A UNE CATEGORY*/
    public function category(){
        return $this->belongsTo(User::class);
    }

    public function getTitleAttribute($attribute){
        return Str::title($attribute);/*RETOUR CHAQUE MOT DANS UN PHRASE EN MAJ*/
    }
}

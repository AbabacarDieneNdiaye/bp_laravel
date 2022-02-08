<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientPhysique extends Model
{
    protected $fillable = array(
        'nom',
        'prenom',
        'adresse',
        'tel',
        'email',
        'cni',
        'salaire',
        'profession',
        'infos'
    );
    
    public static $rules = array(
        'nom'=>'required|min:2',
        'prenom'=>'required|min:2',
        'adresse'=>'required|min:2',
        'tel'=>'required|min:9',
        'email'=>'required|min:14',
        'cni'=>'required|integer|min:13',
        'salaire'=>'double|min:5',
        'profession'=>'min:3',
        'infos'=>'min:3'
    );

    public function compte(){
        return $this->hasMany('App\Compte');
    }
}

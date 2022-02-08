<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillable=array(
        'clientphysiques_id',
        'clientmorals_id',
        'numeroCompte',
        'typeCompte',
        'fraisOuverture',
        'remuneration',
        'agios',
        'dateOuverture',
        'dateDelocage',
        'solde'
    );

    public static $rules = array(
        'clientphysiques_id'=>'integer',
        'clientmorals_id'=>'integer',
        'numeroCompte'=>'required|integer',
        'typeCompte'=>'required',
        'fraisOuverture'=>'required|numeric',
        'remuneration'=>'numeric',
        'agios'=>'numeric',
        'dateOuverture'=>'date',
        'dateDeblocage'=>'date',
        'solde'=>'numeric'
    );

    public function clientphysiques(){
        return $this->belongsTo('App\ClientPhysique');
    }

    public function clientmorals(){
        return $this->belongsTo('App\ClientMoral');
    }
}

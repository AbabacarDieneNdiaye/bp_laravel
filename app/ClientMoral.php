<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientMoral extends Model
{
    protected $fillable = array(
        'nom',
        'raisonSociale',
        'adresse',
        'tel',
        'email',
        'ninea',
        'registreCommerce'
    );
    
    public static $rules = array(
        'nom'=>'required|min:2',
        'raisonSociale'=>'required|min:2',
        'adresse'=>'required|min:2',
        'tel'=>'required|min:9',
        'email'=>'required|min:14',
        'ninea'=>'required|min:7',
        'registreCommerce'=>'required|min:5'
    );

    public function compte(){
        return $this->hasMany('App\Compte');
    }
}

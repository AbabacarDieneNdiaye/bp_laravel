<?php

namespace App\Http\Controllers;

use App\ClientMoral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientMoralController extends Controller
{
    public function add(){
        return view('clientMoral.add');
    }

    public function getAll(){

        $clients = ClientMoral::all(); 
        return view('clientMoral.list', ['clients'=>$clients]);
    }

    public function getOne($id){
        return view('clientMoral.show');
    }

    public function update($id){
        return $this->getAll();
    }

    public function delete($id){
        return $this->getAll();
    }
    public function persist(Request $request)
    {
        $result = 
        DB::table('client_morals')->insert([
            'nom' => $request->nom,
            'raisonSociale' => $request->raisonSociale,
            'adresse' => $request->adresse,
            'tel' => $request->tel,
            'email' => $request->email,
            'ninea' => $request->ninea,
            'registreCommerce' => $request->registreCommerce,
        ]);
        
            return $this->getAll();        
    }
}

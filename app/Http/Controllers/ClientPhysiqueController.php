<?php

namespace App\Http\Controllers;

use App\ClientPhysique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientPhysiqueController extends Controller
{
    public function add(){
        return view('clientPhysique.add');
    }

    public function getAll(){

        $clients = ClientPhysique::all();
        return view('clientPhysique.list', ['clients'=>$clients]);
    }

    public function getOne($id){
        return view('clientPhysique.show');
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
        DB::table('client_physiques')->insert([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'adresse' => $request->adresse,
            'tel' => $request->tel,
            'email' => $request->email,
            'cni' => $request->cni,
            'salaire' => $request->salaire,
            'profession' => $request->profession,
            'infos' => $request->infos
        ]);
        
            return $this->getAll();        
    }
}

<?php

namespace App\Http\Controllers;

use App\Compte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompteController extends Controller
{
    public function add()
    {
        return view('compte.add');
    }

    public function getAll()
    {

        $comptes = Compte::all();
        return view('compte.list', ['comptes'=>$comptes]);
    }

    public function delete($id)
    {
        return $this->getAll();
    }

    public function persist(Request $request)
    {
        DB::table('comptes')->insert([
            'numeroCompte' => $request->numeroCompte,
            'typeCompte' => $request->typeCompte,
            'fraisOuverture' => $request->fraisOuverture,
            'remuneration' => $request->remuneration,
            'agios' => $request->agios,
            'dateOuverture' => $request->dateOuverture,
            'dateDeblocage' => $request->dateDeblocage,
            'solde' => $request->depotInitial,
            'clientphysiques_id'=>$request->search
        ]);
        return $this->getAll();
    }
}

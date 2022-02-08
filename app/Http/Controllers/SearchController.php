<?php

namespace App\Http\Controllers;

use App\ClientPhysique;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        
        if($request->ajax()) {
          
            $data = ClientPhysique::where('cni', 'LIKE', $request->searchP.'%')
                ->get();

            $output = '';
           
            if (count($data)>0) {
              
                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
              
                foreach ($data as $row){
                   
                    $output .= '<li class="list-group-item list-group-item-success">'.$row->id.'</li>
                                <p>'.$row->nom.' - '.$row->prenom.' - '.$row->email.'</p>';
                }
              
                $output .= '</ul>';
            }
            else {
             
                $output .= '<li class="list-group-item">'.'Client introuvable'.'</li>';
            }
           
            return $output;
        }
    }
}

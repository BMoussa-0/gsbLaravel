<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PdoGsb;

class EditerFraisController extends Controller
{
    function recupdonnees()
    {
        $recup = PdoGsb::recuperer();
        return view('editerfrais');
    }
    

    function fraispartype(Request $request)
    {
    $type = $request->input('type');
    
    $visiteurs = PdoGsb::fraistype($type);
    
    return view('typefrais', compact('visiteurs', 'type'));
    }

    public function fraisparannee(Request $request)
    {
        $moisAnnee = $request->input('moisAnnee');
    
        $fraisAnnee = PdoGsb::fraisannee($moisAnnee);
    
        return view('fraisannee', compact('moisAnnee', 'fraisAnnee'));
    }
    
    function fraisvisiteurnom(Request $request)
    {
        $visiteur = $request->input('visiteur');
        
        $fraisvn = PdoGsb::fraisvisiteur($visiteur);

        return view('fraisvisiteur', compact('visiteur', 'fraisvn'));
    }
} 
?>
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
    
    /** 4).a recupere les frais pour une annee */
    public function fraisparannee(Request $request)
    {
        $moisAnnee = $request->input('moisAnnee');
    
        $fraisAnnee = PdoGsb::fraisannee($moisAnnee);
    
        return view('fraisannee', compact('moisAnnee', 'fraisAnnee'));
    }
    
    /** 4).b recupere les frais pour un visiteur */
    function fraisvisiteurnom(Request $request)
    {
        $visiteur = $request->input('visiteur');
        
        $fraisvn = PdoGsb::fraisvisiteur($visiteur);

        return view('fraisvisiteur', compact('visiteur', 'fraisvn'));
    }

    /** 4).c recupere les frais pour un type */
    function fraispartype(Request $request)
    {
    $type = $request->input('type');
        
    $visiteurs = PdoGsb::fraistype($type);
        
    return view('typefrais', compact('visiteurs', 'type'));
    }
    
} 
?>
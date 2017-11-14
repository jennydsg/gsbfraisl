<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\metier\GsbFrais;

class modifMdpController extends Controller
{
    public function affFormModifMdp(){
        $erreur = "";
        return view('formModifMdp', compact('erreur'));
    }
    
    public function verifMdp(){
        // Récupérer ancien mot de passe 
        
        // Vérifier que mot de passe saisi = ancien mot de passe
        
        // Vérifier que les deux mot de passes tapés sont identiques
        
        // Si tout est ok, mettre à jour la abse de données
        
        $erreur = "";
        
        return redirect()->back()->with('status', 'Mise à jour effectuée !');
        // return view('formModifMdp', compact('erreur'));
        
    }
}

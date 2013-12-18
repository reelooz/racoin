<?php

namespace racoin\Controleurs;
use \racoin\Classe\Annonce;
use \racoin\Classe\Categorie;
use \racoin\Classe\Photo;
use \racoin\Classe\Utilisateur;

/* * *******************************************************************
 * A faire
 * 
 */

class ControleurAnnonce{

    public function afficheAnnonce($id) {
        return "afficheAnnonce(" . $id . ")";
    }

    public function afficheContact($id) {
        return "afficheContact(" . $id . ")";
    }

    public function afficheAjout() {
        return "afficheAjout()";
    }
    
    public function displayAllAnnonce($s) {
        $s->display('tpl/header.tpl');
        $s->display('tpl/sideBar.tpl');
        $annonces = array();
        $resAnnonce = Annonce::with('categorie','utilisateur')->get();
        foreach ($resAnnonce as $res){
            $tab=array();
            $tab['id']=$res->idannonce;
            $tab['titre']=$res->titreannonce;
            $tab['descriptif']=$res->descriptifannonce;
            $tab['prix']=$res->prixannonce;
            $tab['post']=$res->codepostannonce;
            $tab['ville']=$res->villeannonce;
            $tab['idUtil']=$res->idutil;
            $tab['idCateg']=$res->idcateg;
            $annonces[]=$tab;
        }
        $s->assign('annonces', $annonces);
     //var_dump($resAnnonce->toArray());
        $s->display('tpl/allAnnonce.tpl');
        $s->display('tpl/footer.tpl');
    }

}

?>

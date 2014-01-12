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
        $categories = array();
        $resCateg = Categorie::all();
         foreach ($resCateg as $res){
            $t=array();
            $t['idCateg']=$res->idcateg;
            $t['titreCateg']=$res->labelcateg;
            $categories[]=$t;
        }
        $s->assign('categories', $categories);
        $s->display('tpl/sideBar.tpl');
        
        $annonces = array();
        $resAnnonce = Annonce::with('categorie','utilisateur')->get();
        foreach ($resAnnonce as $res){
            $tab=array();
            $tab['id']=$res->idannonce;
            $tab['titre']=$res->titreannonce;
            $tab['descriptif']=$res->descriptifannonce;
            $tab['prix']=$res->prixannonce;
            $tab['post']=$res->codepostalannonce;
            $tab['ville']=$res->villeannonce;
            $tab['idUtil']=$res->idutil;
            $tab['idCateg']=$res->idcateg;
            $annonces[]=$tab;
        }
        $s->assign('annonces', $annonces);
        $s->display('tpl/allAnnonce.tpl');
        $s->display('tpl/footer.tpl');
    }
    
    public function displayOneAnnonce($s,$id) {
        $s->display('tpl/header.tpl');
        $categories = array();
        $resCateg = Categorie::all();
         foreach ($resCateg as $res){
            $t=array();
            $t['idCateg']=$res->idcateg;
            $t['titreCateg']=$res->labelcateg;
            $categories[]=$t;
        }
        $s->assign('categories', $categories);
        $s->display('tpl/sideBar.tpl');
        $annonces = array();
        $tab = array();
        
        $res = Annonce::find($id);
        $resUtil = Utilisateur::find($res->idutil);
        $tab['id']=$res->idannonce;
        $tab['titre']=$res->titreannonce;
        $tab['descriptif']=$res->descriptifannonce;
        $tab['prix']=$res->prixannonce;
        $tab['post']=$res->codepostalannonce;
        $tab['ville']=$res->villeannonce;
        $tab['idUtil']=$resUtil->idutil;
        $tab['nomUtil']=$resUtil->nom;
        $tab['prenomUtil']=$resUtil->prenom;
        $tab['villeUtil']=$resUtil->ville;
        $tab['postUtil']=$resUtil->codepost;
        $tab['deptUtil']=$resUtil->departement;
        $tab['mailUtil']=$resUtil->mail;
        $tab['mdpUtil']=$resUtil->motdepasse;
        $tab['phoneUtil']=$resUtil->telephone;
        $tab['idCateg']=$res->idcateg;
        
        $annonces[]=$tab;
            
        $s->assign('annonces', $annonces);
        $s->display('tpl/OneAnnonce.tpl');
        $s->display('tpl/footer.tpl');
    }
    
    public function afficheCateg($s,$categ) {
        $s->display('tpl/header.tpl');
        $categories = array();
        $resCateg = Categorie::all();
         foreach ($resCateg as $res){
            $t=array();
            $t['idCateg']=$res->idcateg;
            $t['titreCateg']=$res->labelcateg;
            $categories[]=$t;
        }
        $s->assign('categories', $categories);
        $s->display('tpl/sideBar.tpl');
        $resRecherche = Annonce::where('idcateg', '=', $categ)->get();
        
        $recherche = array();
        foreach ($resRecherche as $res){
            $tab=array();
            $tab['id']=$res->idannonce;
            $tab['titre']=$res->titreannonce;
            $tab['descriptif']=$res->descriptifannonce;
            $tab['prix']=$res->prixannonce;
            $tab['post']=$res->codepostalannonce;
            $tab['ville']=$res->villeannonce;
            $tab['idUtil']=$res->idutil;
            $tab['idCateg']=$categ;
            $recherche[]=$tab;
        }
        $s->assign('annonces', $recherche);
        $s->display('tpl/allAnnonce.tpl');
        $s->display('tpl/footer.tpl');
    }
    
    public function afficheCategUrl ($s,$categ){
        $s->display('tpl/header.tpl');
        $categories = array();
        $resCateg = Categorie::all();
         foreach ($resCateg as $res){
            $t=array();
            $t['idCateg']=$res->idcateg;
            $t['titreCateg']=$res->labelcateg;
            $categories[]=$t;
        }
        $s->assign('categories', $categories);
        $s->display('tpl/sideBar.tpl');
        $resCategUrl = Categorie::where('labelcateg', '=', $categ)->get();
        foreach ($resCategUrl as $res){
            $idCateg=$res->idcateg;
            $resAnnonce = Annonce::where('idcateg', '=', $res->idcateg)->get();
            $annonce = array();
            foreach ($resAnnonce as $res){
                $tab=array();
                $tab['id']=$res->idannonce;
                $tab['titre']=$res->titreannonce;
                $tab['descriptif']=$res->descriptifannonce;
                $tab['prix']=$res->prixannonce;
                $tab['post']=$res->codepostalannonce;
                $tab['ville']=$res->villeannonce;
                $tab['idUtil']=$res->idutil;
                $tab['idCateg']=$categ;
                $annonce[]=$tab;
            }            
            $s->assign('annonces', $annonce);
            $s->display('tpl/allAnnonce.tpl');
            $s->display('tpl/footer.tpl');            
        }
        
    }
    
    public function addAnnonce($s, $app) { 
        $url = $app->urlFor('ajout');
        $s->assign('url', $url);
        $date = date("Y-m-d G:i:s");
        $s->assign('date', $date);
        $categories = array();
        $resCateg = Categorie::all();
         foreach ($resCateg as $res){
            $t=array();
            $t['idCateg']=$res->idcateg;
            $t['titreCateg']=$res->labelcateg;
            $categories[]=$t;
        }
        $s->assign('categories', $categories);
        $s->display('tpl/header.tpl');
        $s->display('tpl/ajoutAnnonce.tpl');
        $s->display('tpl/footer.tpl');
    }
    public function ajoutAnnonce($s) {
        $res = $_POST['test'];
        if ($res == "Ajouter l'annonce"){
            $user = new Utilisateur();
            $user->nom = $_POST['NomPosteurAnnonce'];
            $user->prenom = $_POST['PrenomPosteurAnnonce'];
            $user->ville = $_POST['villeAnnonce'];
            $user->codepost = $_POST['codePostAnnonce'];
            $user->departement = 'osef';
            $user->mail = $_POST['MailPosteurAnnonce'];
            $user->motdepasse = md5($_POST['PassAnnonce']);
            $user->telephone = $_POST['TelPosteurAnnonce'];
            $user->save();
            $userid = $user->idutil;
            var_dump($user->toArray());
            $annonce = new Annonce();
            $annonce->titreannonce = $_POST['titreAnnonce'];
            $annonce->descriptifannonce = $_POST['descrAnnonce'];
            $annonce->prixannonce = $_POST['prixAnnonce'];
            $annonce->dateannonce = $_POST['dateAnnonce'];
            $annonce->villeannonce = $_POST['villeAnnonce'];
            $annonce->codepostalannonce = $_POST['codePostAnnonce'];
            $annonce->motdepasseannonce = md5($_POST['PassAnnonce']);
            $annonce->emailannonce = $_POST['MailPosteurAnnonce']; ;
            $annonce->idutil = $userid;
            $annonce->idcateg = $_POST['selectCateg'];
            var_dump($annonce->toArray());
            $res = $annonce->save();
            var_dump($res);
            $annonceId = $annonce->idannonce;
        }elseif($res == "Previsualiser l'annonce"){
            $annonce = array();
            $annonce['titre'] = $_POST['titreAnnonce'];
            $annonce['description'] = $_POST['descrAnnonce'];
            $annonce['prix'] = $_POST['prixAnnonce'];
            $annonce['date'] = $_POST['dateAnnonce'];
            $annonce['ville'] = $_POST['villeAnnonce'];
            $annonce['mail'] = $_POST['MailPosteurAnnonce'];
            $annonce['post'] = $_POST['codePostAnnonce'];
            $annonce['nom'] = $_POST['NomPosteurAnnonce'];
            $annonce['prenom'] = $_POST['PrenomPosteurAnnonce'];
            $annonce['phoneUser'] = $_POST['TelPosteurAnnonce'];
            
            $s->display('tpl/header.tpl');
            $s->assign('annonce', $annonce);
            $s->display('tpl/PreviewOneAnnonce.tpl');
            $s->display('tpl/footer.tpl');
        }
    }
   
    

}

?>

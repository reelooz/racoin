<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'vendor/autoload.php';
use racoin\Base\App;
use racoin\Classe\Annonce;
use racoin\Classe\Utilisateur;
use racoin\Classe\Photo;
use racoin\Classe\Categorie;
use racoin\Controleurs\Controler;
use racoin\Controleurs\ControleurAnnonce as ControleurAnnonce;

App::EloConfig();

$Smarty = new Smarty();
$app = new Slim\Slim;

// Fixer les chemins de template (optionnel)
$Smarty->template_dir = '../tpl';



$app->get('/annonce/allAffiche', function() use ($app) {
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->displayAllAnnonce($Smarty);
}
);

$app->get('/annonce/:id', function($id) use ($app) {
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    if (preg_match('/[1-9999999999999999999]/', $id)){
        $c->displayOneAnnonce($Smarty,$id);
    }else{
        $c->afficheCategUrl($Smarty,$id);
    }
    
}
);

$app->get('/addAnnonce', function() use ($app) {
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->addAnnonce($Smarty);
}
);

$app->post('/annonce/afficheCateg', function() use ($app) {
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $categ = $_POST["selectCateg"];
    $c->afficheCateg($Smarty, $categ);
}
);

$app->run();



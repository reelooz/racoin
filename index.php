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


$app->get('/', function() use ($app) {
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->displayAllAnnonce($Smarty);
}
);

$app->get('/annonces/allAffiche', function() use ($app) {
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->displayAllAnnonce($Smarty);
}
);
$app->get('/annonces/addAnnonce', function() use ($app) {
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->addAnnonce($Smarty,$app);
}
)-> name ('ajout');



$app->post('/annonces/addAnnonce', function() use ($app) {
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->ajoutAnnonce($Smarty);
}
)-> name ('ajoutPost');

$app->get('/annonces/prevAnnonce', function() use ($app) {
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->previsualiserAnnonce($Smarty,$app);
}
)-> name ('prev');

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
$app->post('/annonces/modifAnnonce/:id', function($id) use ($app){
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->modAnnonce($Smarty,$app, $id);
}
)->name ('modif');

$app->post('/annonces/modifAnnonce', function() use ($app){
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->modifAnnonce($Smarty);
}
);

$app->post('/annonces/afficheCateg', function() use ($app) {
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $categ = $_POST["selectCateg"];
    $c->afficheCateg($Smarty, $categ);
}
);


$app->post('/annonces/suppAnnonce/:id', function($id) use ($app){
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->suppAnnonce($Smarty,$app, $id);
}
)->name ('supp');


$app->post('/annonces/mesAnnonces', function() use ($app){
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->mesAnnonces($Smarty);
});


$app->run();



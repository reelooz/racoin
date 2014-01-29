<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
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

$app->get('/annonces/suppAnnonce/:id', function($id) use ($app){
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->suppAnnonceadmin($Smarty,$app, $id);
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


$app->get('/connexion', function() use ($app) {
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->connexionForm($Smarty,$app);
}
)-> name ('connexion');

$app->post('/connexion', function() use ($app) {
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->connexionValid($Smarty,$app);
}
);

$app->get('/deconnexion', function() use ($app) {
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->deconnexion($Smarty,$app);
}
);

$app->get('/admin/gestion', function() use ($app) {
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->pageGestionAdmin($Smarty,$app);
}
);

$app->get('/admin/addAdmin', function() use ($app) {
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->ajoutAdmin($Smarty,$app);
}
)->name('addAdmin');
$app->post('/admin/addAdmin', function() use ($app) {
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->addAdmin($Smarty,$app);
}
);

$app->get('/admin/addCateg', function() use ($app) {
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->ajoutCateg($Smarty,$app);
})->name('addCateg');

$app->post('/admin/addCateg', function() use ($app) {
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->addCateg($Smarty,$app);
});

$app->get('/pro/creationCompte', function() use ($app) {
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->ajoutComptePro($Smarty,$app);
})->name('addPro');

$app->post('/pro/creationCompte', function() use ($app) {
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->addComptePro($Smarty,$app);
});

$app->get('/pro/addAnnonce', function() use ($app) {
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->ajoutAnnoncePro($Smarty,$app);
})->name('addAnnoncePro');

$app->post('/pro/addAnnonce', function() use ($app) {
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->addAnnoncePro($Smarty,$app);
});

$app->get('/pro/afficherProfilPro', function() use ($app) {
    $Smarty = new Smarty();
    $c = new ControleurAnnonce();
    $c->afficherprofilPro($Smarty,$app);
});


$app->run();



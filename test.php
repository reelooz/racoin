<?php
<<<<<<< HEAD

require_once 'vendor/autoload.php';

App::EloConfigure();

/*function takeCare() {

    echo "ATTENTION : mode Administration / ETES VOUS AUTORISE ??? <br>";
}*/

$app = new Slim\Slim;

// Instancier notre objet smarty
$Smarty = new Smarty();
// Fixer les chemins de template (optionnel)
$Smarty->template_dir = '../tpl';



$app->get('/', function () {
    echo "affichage de l'index";
    $Smarty->display('tpl/header.tpl');
    $Smarty->display('tpl/sideBar.tpl');
    $Smarty->display('tpl/accueil.tpl');
    $Smarty->display('tpl/footer.tpl');
});


/*$app->get('/annonce/affiche', function() use ($app) {

    $c = new \racoin\AnnonceController();
    $c->callAction('affiche', $app->request->get());
}
);
$app->get('/annonce/contact', function() use ($app) {

    $c = new \racoin\AnnonceController();
    $c->callAction('contact', $app->request->get());
}
);
$app->get('/annonce/ajout', function() use ($app) {

    $c = new \racoin\AnnonceController();
    //ici un petit bricolage pour s'adapter à l'interface des méthodes controller 
    $get = $app->request->get();
    $get['url'] = $app->urlFor('add');
    $c->callAction('ajout', $get);
}
);

$app->post('/annonce/add', function() use ($app) {

    $c = new \racoin\AnnonceController();
    $c->callAction('insert', $app->request->post());
}
)->name('add');

$app->get('/list/search', function() use ($app) {

    $c = new \racoin\RechercheController();
    $c->callAction('search', $app->request->get());
}
);
$app->get('/admin/ajoutcat', array(new \racoin\RacoinAdmin, "takeCare"), function() use ($app) {

    $c = new \racoin\AnnonceController();
    $c->callAction('ajoutcat', $app->request->get());
}
);
$app->get('/admin/supcat', array(new \racoin\RacoinAdmin, "takeCare"), function() use ($app) {

    $c = new \racoin\AnnonceController();
    $c->callAction('supcat', $app->request->get());
}
);*/
$app->run();
=======
require 'vendor/autoload.php' ;
require 'php/modele/Article.php';
require 'php/Base/App.php';
use Illuminate\Database\Capsule\Manager as Capsule;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "Master ! Gratin carotte
coucou deathpote thomashjkhjk";  
App::EloConfig();
$resAnnonce = Annonce::all();
var_dump($resAnnonce->toArray());
>>>>>>> d4a7761b06cac7b25e56505123a2f314dd793d48

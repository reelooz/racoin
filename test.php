<?php
require_once 'vendor/autoload.php';
use \racoin\Base\App;
use racoin\Classe\Annonce;
use racoin\Classe\Utilisateur;
use racoin\Classe\Photo;
use racoin\Classe\Categorie;

App::EloConfig();

$Smarty = new Smarty();
$app = new Slim\Slim;

// Fixer les chemins de template (optionnel)
$Smarty->template_dir = '../tpl';



$app->get('/', function () {
    echo "affichage de l'index";
    $Smarty = new Smarty();
    $Smarty->display('tpl/header.tpl');
    $Smarty->display('tpl/sideBar.tpl');
    $Smarty->display('tpl/accueil.tpl');
    $Smarty->display('tpl/footer.tpl');
});

$app->run();
$resAnnonce = Annonce::all();
var_dump($resAnnonce->toArray())
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
;

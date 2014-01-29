<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Racoincoin</title>
        <link rel="stylesheet" href="/ProjetRacoinNet/web/css/stylesheets/screen.css" type="text/css" media="screen" />
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <script src="/ProjetRacoinNet/web/js/jquery.js"></script>
        <script type="text/javascript" src="/ProjetRacoinNet/web/js/fonction.js"></script>
        <script type="text/javascript" src="/ProjetRacoinNet/web/js/ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="/ProjetRacoinNet/web/js/pieceJointe.js"></script>
        <script type="text/javascript" src="/ProjetRacoinNet/web/js/galerie.js"></script>
    </head>
    <body>
        {if !isset($smarty.session.id) }
            <a href="/ProjetRacoinNet/connexion"> Connexion</a>
            <a href="/ProjetRacoinNet/pro/creationCompte"> Creer un compte PRO</a>
        {else}
            {if {$smarty.session.pro} eq 1}
                    <p> Coucou Pro {$smarty.session.prenom} {$smarty.session.nom}</p>
                {elseif {$smarty.session.admin} eq 1}
                    <p> Coucou Admin {$smarty.session.prenom} {$smarty.session.nom}</p>
                    <a href="/ProjetRacoinNet/admin/gestion"> Gestion administrateur</a><br><br>
                {else}

                    <p> Coucou {$smarty.session.prenom} {$smarty.session.nom}</p>
                {/if}
                <a href="/ProjetRacoinNet/deconnexion">Deconnexion</a>
            {/if}

            <header>
                <a href="/ProjetRacoinNet/" ><h1>Racoincoin.net</h1></a>
            </header>

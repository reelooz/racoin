<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-28 17:07:30
         compiled from "tpl\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:777252b06398218603-08165138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e66305ba4bb7982307a893e4dba8f87e18e007f' => 
    array (
      0 => 'tpl\\header.tpl',
      1 => 1390927223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '777252b06398218603-08165138',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52b063983d2739_05418500',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b063983d2739_05418500')) {function content_52b063983d2739_05418500($_smarty_tpl) {?><!doctype html>
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
        <?php if (!isset($_SESSION['id'])) {?>
            <a href="/ProjetRacoinNet/connexion"> Connexion</a>
            <a href="/ProjetRacoinNet/pro/creationCompte"> Creer un compte PRO</a>
        <?php } else { ?>
            <?php ob_start();?><?php echo $_SESSION['pro'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1) {?>
                    <p> Coucou Pro <?php echo $_SESSION['prenom'];?>
 <?php echo $_SESSION['nom'];?>
</p>
                <?php } else {?><?php ob_start();?><?php echo $_SESSION['admin'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2==1) {?>
                    <p> Coucou Admin <?php echo $_SESSION['prenom'];?>
 <?php echo $_SESSION['nom'];?>
</p>
                    <a href="/ProjetRacoinNet/admin/gestion"> Gestion administrateur</a><br><br>
                <?php } else { ?>

                    <p> Coucou <?php echo $_SESSION['prenom'];?>
 <?php echo $_SESSION['nom'];?>
</p>
                <?php }}?>
                <a href="/ProjetRacoinNet/deconnexion">Deconnexion</a>
            <?php }?>

            <header>
                <a href="/ProjetRacoinNet/" ><h1>Racoincoin.net</h1></a>
            </header>
<?php }} ?>

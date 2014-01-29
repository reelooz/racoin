<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-28 15:14:10
         compiled from "tpl\AjoutAdmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:910952e7c7aa6ceab2-99890898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a5ef28f5c1d584763882543708b5f0df66f0fa9' => 
    array (
      0 => 'tpl\\AjoutAdmin.tpl',
      1 => 1390921851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '910952e7c7aa6ceab2-99890898',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52e7c7aa730a79_83086967',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e7c7aa730a79_83086967')) {function content_52e7c7aa730a79_83086967($_smarty_tpl) {?><form method="POST" action="/ProjetRacoinNet/admin/addAdmin">
    <h1>Ajout d'un administrateur</h1>
    Identifiant : <input type="email" name="email" placeholder="identifiant (Email)"/><br><br>
    Nom : <input type="text" name="nom" placeholder="nom"/><br><br>
    Prenom : <input type="text" name="prenom" placeholder="prénom"/><br><br>
    Mot de passe : <input type="text" name="pass1" placeholder="Mot de passe"/><br><br>
    Confirmation mot de passe : <input type="text" name="pass2" placeholder="Mot de passe"/><br><br>
    <input type="submit" value="Valider l'ajout d'un nouvel administrateur" />
</form><?php }} ?>

<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-28 13:44:39
         compiled from "tpl\connexionForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:652852e7b1f6e388b6-83426696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '264c28ebd1af4885addf3965466bf659b520677f' => 
    array (
      0 => 'tpl\\connexionForm.tpl',
      1 => 1390916662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '652852e7b1f6e388b6-83426696',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52e7b1f6f00ec9_08032526',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e7b1f6f00ec9_08032526')) {function content_52e7b1f6f00ec9_08032526($_smarty_tpl) {?><form method="POST" action="/ProjetRacoinNet/connexion">
    Identifiant : <input type="text" name="log" size="50" placeholder="Votre adresse email"/><br><br>
    Mot de passe : <input type="password" name="pass" placeholder="Votre mot de passe"/><br><br>
    <input type="submit" name="Valider"/>

</form><?php }} ?>

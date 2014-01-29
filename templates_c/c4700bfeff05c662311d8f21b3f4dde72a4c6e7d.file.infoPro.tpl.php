<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-29 09:58:56
         compiled from "tpl\infoPro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:943552e8d0e0ae5665-13479748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4700bfeff05c662311d8f21b3f4dde72a4c6e7d' => 
    array (
      0 => 'tpl\\infoPro.tpl',
      1 => 1390989287,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '943552e8d0e0ae5665-13479748',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52e8d0e0b82e14_24633553',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e8d0e0b82e14_24633553')) {function content_52e8d0e0b82e14_24633553($_smarty_tpl) {?><h1> Localisation </h1>
Ville* : <input type="text" name="villeAnnonce" value="<?php echo $_SESSION['ville'];?>
"/><br>      
Code Postal* : <input type="text" name="codePostAnnonce" value="<?php echo $_SESSION['codepost'];?>
"/><br><br>

<h1> Vos information </h1>
Nom* : <input type="text" name="NomPosteurAnnonce" value="<?php echo $_SESSION['nom'];?>
"/><br>
Prénom* : <input type="text" name="PrenomPosteurAnnonce"  value="<?php echo $_SESSION['prenom'];?>
"/><br>
Mail* : <input type="email" name="MailPosteurAnnonce" value="<?php echo $_SESSION['mail'];?>
"/><br>
Téléphone* : <input type="tel" name="TelPosteurAnnonce" value="0<?php echo $_SESSION['telephone'];?>
" /><br><br><?php }} ?>

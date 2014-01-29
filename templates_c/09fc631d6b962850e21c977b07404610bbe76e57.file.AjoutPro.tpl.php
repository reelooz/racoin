<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-28 17:28:29
         compiled from "tpl\AjoutPro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:673652e7e3d6b73636-03638402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09fc631d6b962850e21c977b07404610bbe76e57' => 
    array (
      0 => 'tpl\\AjoutPro.tpl',
      1 => 1390930086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '673652e7e3d6b73636-03638402',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52e7e3d6c0ca92_58746458',
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e7e3d6c0ca92_58746458')) {function content_52e7e3d6c0ca92_58746458($_smarty_tpl) {?><h1>Ajouter un compte PRO</h1>
<h3 style="color:red;">Attention ce compte est uniquement réservé à une clientelle PRO, en cas de fraude Jean-Hugues vous mettra une fessée</h3>
<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
    Identifiant : <input type="email" name="email" placeholder="identifiant (Email)"/><br><br>
    Nom : <input type="text" name="nom" placeholder="nom"/><br><br>
    Prenom : <input type="text" name="prenom" placeholder="prénom"/><br><br>
    Téléphone : <input type="text" name="phone" placeholder="téléphone"/><br><br>
    Adresse : <input type="text" name="adr" placeholder="adresse"/><br><br>
    Code Postal : <input type="text" name="cp" placeholder="code postal"/><br><br>
    Ville : <input type="text" name="city" placeholder="ville de résidence"/><br><br>
    Mot de passe : <input type="text" name="pass1" placeholder="Mot de passe"/><br><br>
    Confirmation mot de passe : <input type="text" name="pass2" placeholder="Mot de passe"/><br><br>
    <input type="submit" value="Valider l'ajout d'un nouveau pro" />
</form><?php }} ?>

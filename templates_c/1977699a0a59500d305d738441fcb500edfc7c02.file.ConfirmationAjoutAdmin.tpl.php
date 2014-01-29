<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-28 15:49:48
         compiled from "tpl\ConfirmationAjoutAdmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1457352e7cffd383268-82550932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1977699a0a59500d305d738441fcb500edfc7c02' => 
    array (
      0 => 'tpl\\ConfirmationAjoutAdmin.tpl',
      1 => 1390924144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1457352e7cffd383268-82550932',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52e7cffd52f785_90624674',
  'variables' => 
  array (
    'resUtil' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e7cffd52f785_90624674')) {function content_52e7cffd52f785_90624674($_smarty_tpl) {?><h1> Résumé de l'utilisateur afficher</h1>

    
    <p> Identifiant : <?php echo $_smarty_tpl->tpl_vars['resUtil']->value['mail'];?>
</p>
    <p> Nom : <?php echo $_smarty_tpl->tpl_vars['resUtil']->value['nom'];?>
</p>
    <p> Prénom : <?php echo $_smarty_tpl->tpl_vars['resUtil']->value['prenom'];?>
</p>
    <p> Administateur ? : <?php echo $_smarty_tpl->tpl_vars['resUtil']->value['admin'];?>
</p>

<?php }} ?>

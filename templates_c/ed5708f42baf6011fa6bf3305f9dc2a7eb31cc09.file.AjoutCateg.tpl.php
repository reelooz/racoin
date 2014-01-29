<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-28 15:59:13
         compiled from "tpl\AjoutCateg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:629652e7d3c63985a7-20527469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed5708f42baf6011fa6bf3305f9dc2a7eb31cc09' => 
    array (
      0 => 'tpl\\AjoutCateg.tpl',
      1 => 1390924750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '629652e7d3c63985a7-20527469',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52e7d3c63e1c44_25350193',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e7d3c63e1c44_25350193')) {function content_52e7d3c63e1c44_25350193($_smarty_tpl) {?><h1>Ajouter une catégorie</h1>
<form method="POST" action="/ProjetRacoinNet/admin/addCateg">
    Label de la catégorie : <input type="text" size="150" name="categ" placeholder="label de la catégorie"/><br><br>
    <input type="submit" value="Ajouter une catégorie"/>
</form><?php }} ?>

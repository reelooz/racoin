<?php /* Smarty version Smarty-3.1-DEV, created on 2013-12-18 10:36:09
         compiled from "tpl\sideBar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:957352b06398458b51-60804779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cf1e4b156935f77e0a320b3155b4fc300fef2a6' => 
    array (
      0 => 'tpl\\sideBar.tpl',
      1 => 1387362238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '957352b06398458b51-60804779',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52b0639845f691_16328267',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b0639845f691_16328267')) {function content_52b0639845f691_16328267($_smarty_tpl) {?><nav>
    <ul>
        <li><input type="text"  placeholder="Votre recherche" autofocus /></li>
        <li>
            <select name="thelist">
                <option>Catégories</option>
                <option>Véhicule</option>
                <option>Immobilier</option>
                <option>Multimédia</option>
                <option>Maisons</option>
                <option>Loisirs</option>
                <option>Divers</option>
            </select>
        </li>
        <li> <select name="thelist">
                <option>Région</option>
                <option>Alsace</option>
                <option>Lorraine</option>
            </select></li>
        <li> <select name="thelist">
                <option>Département</option>
                <option>Vosges</option>
                <option>Meuthe-et-Moselle</option>
            </select></li>
        <li><input type="text" placeholder="Code postal ex:54000"/></li>
        <li><a id="rechercher" href="recherche.html"> Rechercher</a></li>
    </ul>
</nav>
<a id="but" href="creation.html">Ajouter annonce</a>
<a id="but" href=#>Gérer mes annonces</a>
<?php }} ?>

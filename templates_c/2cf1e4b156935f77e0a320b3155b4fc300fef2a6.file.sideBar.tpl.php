<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-29 09:58:11
         compiled from "tpl\sideBar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:957352b06398458b51-60804779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cf1e4b156935f77e0a320b3155b4fc300fef2a6' => 
    array (
      0 => 'tpl\\sideBar.tpl',
      1 => 1390989487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '957352b06398458b51-60804779',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52b0639845f691_16328267',
  'variables' => 
  array (
    'categories' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b0639845f691_16328267')) {function content_52b0639845f691_16328267($_smarty_tpl) {?>
<nav>
    <form method="POST" action="/ProjetRacoinNet/annonces/afficheCateg">
        <ul>
            <li>
                <input type="text" name="selectRecherche" placeholder="Votre recherche" autofocus />
            </li>
            <li>
                <select name="selectCateg">
                    <option value="-1">Selectionner la catégorie</option>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['categ'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['categ']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['name'] = 'categ';
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categories']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['categ']['total']);
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categ']['index']]['idCateg'];?>
"><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['categ']['index']]['titreCateg'];?>
</option>
                    <?php endfor; endif; ?>
                </select>
            </li>
            <li> 
                Prix : <input type="number" name="selectPrix" min="" </input>
            </li>
            <li>
                <input type="submit" name="Rechercher" value="Rechercher"/>
            </li>
        </ul>
    </form>
</nav>
<?php if (isset($_SESSION['id'])) {?>
    <?php if (($_SESSION['pro']==1)) {?>
        <a class="but" href="/ProjetRacoinNet/pro/addAnnonce">Ajouter annonce PRO</a>
    <?php } else { ?>
        <a class="but" href="/ProjetRacoinNet/annonces/addAnnonce">Ajouter annonce</a>
    <?php }?>
<?php } else { ?>
    <a class="but" href="/ProjetRacoinNet/annonces/addAnnonce">Ajouter annonce</a>
<?php }?>


<?php if (isset($_SESSION['id'])) {?>
    <?php if (($_SESSION['pro']==1)) {?>
        <a class="but" href="/ProjetRacoinNet/pro/afficherProfilPro">Mon profil</a>
    <?php } else { ?>
        <a class="but" id="mesAnnonces" onClick="validationMesAnnonces()">Gérer mes annonces
            <div id="validationMesAnnonces" style="display:none;">
                <form method="POST" action="/ProjetRacoinNet/annonces/mesAnnonces">
                    <input type="email" name="mail" placeholder="Votre email" autofocus/>
                    <input type="submit" value="Rechercher"/>
                </form>
            </div>
        <?php }?>
    <?php } else { ?>
        <a class="but" id="mesAnnonces" onClick="validationMesAnnonces()">Gérer mes annonces
            <div id="validationMesAnnonces" style="display:none;">
                <form method="POST" action="/ProjetRacoinNet/annonces/mesAnnonces">
                    <input type="email" name="mail" placeholder="Votre email" autofocus/>
                    <input type="submit" value="Rechercher"/>
                </form>
            <?php }?>

        </div></a>
<?php }} ?>

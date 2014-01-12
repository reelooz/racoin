<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-12 17:35:04
         compiled from "tpl\PreviewOneAnnonce.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2601052d2d2485c39a4-30682177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44efe63f58b5f9caf501f9d5cae8b32a45f2dbf9' => 
    array (
      0 => 'tpl\\PreviewOneAnnonce.tpl',
      1 => 1389548001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2601052d2d2485c39a4-30682177',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'annonce' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52d2d248687327_69361032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d2d248687327_69361032')) {function content_52d2d248687327_69361032($_smarty_tpl) {?><section>
    <div id="content">
        <h1 style="border-bottom: solid black 1px;">Annonces</h1>

            <a href="#">
                <div class="Annonce">
                    <h3>Titre : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['titre'];?>
</h3>
                    <p>Descriptif : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['description'];?>
</p>
                    <p>Prix : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['prix'];?>
 euros</p>
                    <p>Code postal : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['date'];?>
</p>
                    <p>Ville : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['ville'];?>
</p>
                    <a href="#" onClick="afficher()">Contacter le vendeur<a/>
                    <div id="contact" style="display:none;">
                        <p>Nom : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['nom'];?>
</p>
                        <p>Prénom : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['prenom'];?>
</p>
                        <p>Ville : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['ville'];?>
</p>
                        <p>Code postal : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['post'];?>
</p>
                        <p>Departement : osef</p>
                        <p>Mail : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['mail'];?>
</p>
                        <p>Téléphone : 0<?php echo $_smarty_tpl->tpl_vars['annonce']->value['phoneUser'];?>
</p>
                        
                    </div>
                </div>
                <hr>
            </a>
        
    </div>
</section><?php }} ?>

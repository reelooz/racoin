<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-21 16:49:29
         compiled from "tpl\modifAnnonce.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1431352dd46143c0290-24344714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f0cd169564160950baf92d4e920bdd3217a30ca' => 
    array (
      0 => 'tpl\\modifAnnonce.tpl',
      1 => 1390322964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1431352dd46143c0290-24344714',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52dd46144cb107_79242177',
  'variables' => 
  array (
    'annonce' => 0,
    'util' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd46144cb107_79242177')) {function content_52dd46144cb107_79242177($_smarty_tpl) {?><section>
    <div id="content">
        <h1 style="border-bottom: solid black 1px;">Annonces</h1>

                <div class="Annonce">
                    <form method="POST" action="/ProjetRacoinNet/annonces/modifAnnonce" >
                        <h1>Votre annonce</h1>
                        <p>Titre : <input type="text" value='<?php echo $_smarty_tpl->tpl_vars['annonce']->value['titreannonce'];?>
' name="titre" size="150"></p>                        
                        <p>Descriptif de l'annonce : <br><br><textarea  id="objet" name="descrAnnonce" value='' cols="150" rows="10" ><?php echo $_smarty_tpl->tpl_vars['annonce']->value['descriptifannonce'];?>
</textarea><br><br>
                        <script type='text/javascript'>
                            //<![CDATA[
                                var editor=CKEDITOR.replace( 'descrAnnonce',
                                    {
                                     toolbar :
                                            [
                                                ['Cut','Copy','Paste','PasteText','PasteFromWord'],
                                                ['Undo','Redo'],['TextColor','BGColor'],
                                                ['Bold','Italic','Underline','Strike'],
                                                ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
                                                ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
                                                ['Link','Unlink'],
                                                ['Table','HorizontalRule','SpecialChar'],
                                                ['Format','Font','FontSize'],
                                            ],
                                    enterMode: 2,
                                    shiftEnterMode	: 1
                                    } );
                                    CKEDITOR.config.contentsCss = '../web/css/screen.css' ; 
                            //]]>
                        </script></p>
                        <p>Prix : <input type="number" value='<?php echo $_smarty_tpl->tpl_vars['annonce']->value['prixannonce'];?>
' name="prix" min="0"></p>
                        <p>Ville : <input type="text" value='<?php echo $_smarty_tpl->tpl_vars['annonce']->value['villeannonce'];?>
' name="ville"></p>
                        <p>Code postal : <input type="text" value='<?php echo $_smarty_tpl->tpl_vars['annonce']->value['codepostalannonce'];?>
' name="codePost"></p>
                        <h1> Vos informations</h1>
                            <p>Nom : <input type="text" value='<?php echo $_smarty_tpl->tpl_vars['util']->value['nom'];?>
' name="nomUtil"></p>
                            <p>Prénom : <input type="text" value='<?php echo $_smarty_tpl->tpl_vars['util']->value['prenom'];?>
' name="prenomUtil"></p>
                            <p>Ville : <input type="text" value='<?php echo $_smarty_tpl->tpl_vars['annonce']->value['villeannonce'];?>
' name="villeUtil"></p>
                            <p>Code postal : <input type="text" value='<?php echo $_smarty_tpl->tpl_vars['util']->value['codepost'];?>
' name="postUtil"></p>
                            <p>Mail : <input type="email" value='<?php echo $_smarty_tpl->tpl_vars['util']->value['mail'];?>
' name="mailUtil"></p>
                            <p>Téléphone : <input type="text" value='0<?php echo $_smarty_tpl->tpl_vars['util']->value['telephone'];?>
' name="phoneUtil"></p>
                            <input type="hidden" value='<?php echo $_smarty_tpl->tpl_vars['annonce']->value['idannonce'];?>
' name="id">
                            <input type="hidden" value='<?php echo $_smarty_tpl->tpl_vars['annonce']->value['idcateg'];?>
' name="idCat">
                            <input type="hidden" value='<?php echo $_smarty_tpl->tpl_vars['annonce']->value['idutil'];?>
' name="idUtil">
                        </div>
                        <input type="submit" value="Valider">
                    </form> 
                </div>
                <hr>
            
        
    </div>
</section><?php }} ?>

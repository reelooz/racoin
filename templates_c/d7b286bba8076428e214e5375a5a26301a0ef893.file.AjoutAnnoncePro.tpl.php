<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-29 09:35:34
         compiled from "tpl\AjoutAnnoncePro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2734052e8c09f4d1050-36453314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7b286bba8076428e214e5375a5a26301a0ef893' => 
    array (
      0 => 'tpl\\AjoutAnnoncePro.tpl',
      1 => 1390988133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2734052e8c09f4d1050-36453314',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52e8c09f593604_49456180',
  'variables' => 
  array (
    'categories' => 0,
    'date' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e8c09f593604_49456180')) {function content_52e8c09f593604_49456180($_smarty_tpl) {?><form method="POST" action="/ProjetRacoinNet/pro/addAnnonce" enctype="multipart/form-data">
        
    <h1> Votre annonce PRO </h1>
    <p style="color:red;"> Certains champs vont être automatiquement complétés.<p>
    Catégorie* : <select name="selectCateg">
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
        </select><br><br>
    Titre de l'annonce* : <input type="text" name="titreAnnonce" placeholder="Titre de l'annonce" size="150"/><br><br>
    Descriptif de l'annonce : <br><br><textarea  id="objet" name="descrAnnonce" cols="150" rows="10" ></textarea><br><br>
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
                </script>
      Prix* : <input type="number" name="prixAnnonce" placeholder="Prix de l'annonce" min="0"/> Euros <br><br>
      <input type="hidden" name="dateAnnonce" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
"/>
      Photo n°1 :   <INPUT name="file1" type=file size=50><br>
                    <span id="leschamps_2"><a class=bouton href="javascript:create_champ(2)">Ajouter une photo</a></span></br></br>
      
      <h1> Localisation </h1>
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
" /><br><br>
      
    
    <input type="submit" value="Ajouter l'annonce" name="choixAjout"/>
    <input type="submit" value="Previsualiser l'annonce" name="choixAjout"/>
    
</form>
<?php }} ?>

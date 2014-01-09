<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-09 16:50:50
         compiled from "tpl\ajoutAnnonce.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2138452ced11a358ff0-40397936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30c41d4711943a8c29815bc08301a4769bf479b7' => 
    array (
      0 => 'tpl\\ajoutAnnonce.tpl',
      1 => 1389286248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2138452ced11a358ff0-40397936',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52ced11a3a5b07_87629837',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ced11a3a5b07_87629837')) {function content_52ced11a3a5b07_87629837($_smarty_tpl) {?><form method="POST" action="ajoutAnnonce">
    
    Titre du ticket : <input type="text" name="titreAnnonce" placeholder="Titre de l'annonce" size="150"/><br><br>
    Descriptif de l'annonce : <br><br><textarea  id="objet" name="descrAnnonce" cols="150" rows="10" ></textarea><br><br>
                <script type=\'text/javascript\'>
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
      Prix de l'annonce : <input type="number" name="prixAnnonce" placeholder="Prix de l'annonce"/> Euros <br><br>
      Date de l'annonce : <input type="date" name="dateAnnonce" placeholder="Prix de l'annonce" size="150"/> <br><br>
      Ville: <input type="text" name="villeAnnonce" placeholder="Ville"/><br><br>
      Code Postal: <input type="text" name="codePostAnnonce" placeholder="Code Postal"/><br><br>
     
    
    <input type="submit" value="Ajouter l'annonce"/>
    
</form><?php }} ?>

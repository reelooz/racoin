<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-21 10:25:26
         compiled from "tpl\OneAnnonce.tpl" */ ?>
<?php /*%%SmartyHeaderCode:501652cc1c13aab393-40101215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '985a0efde9b0c4311aaa81661a4d1671a8cc3511' => 
    array (
      0 => 'tpl\\OneAnnonce.tpl',
      1 => 1390299924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '501652cc1c13aab393-40101215',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52cc1c13aad680_04185896',
  'variables' => 
  array (
    'annonce' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cc1c13aad680_04185896')) {function content_52cc1c13aad680_04185896($_smarty_tpl) {?><section>
    <div id="content">
        <h1 style="border-bottom: solid black 1px;">Annonces</h1>

        <h3><?php echo $_smarty_tpl->tpl_vars['annonce']->value['titre'];?>
</h3>
        <?php if (isset($_smarty_tpl->tpl_vars['annonce']->value['photo1'])) {?>
            <div id="galerie">
                <ul id="galerie_mini">
                    <?php if (isset($_smarty_tpl->tpl_vars['annonce']->value['photo1'])) {?>
                        <li><a href="/ProjetRacoinNet/<?php echo $_smarty_tpl->tpl_vars['annonce']->value['photo1'];?>
"><img src="/ProjetRacoinNet/<?php echo $_smarty_tpl->tpl_vars['annonce']->value['miniaturephoto1'];?>
"/></a></li>
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['annonce']->value['photo2'])) {?>
                        <li><a href="/ProjetRacoinNet/<?php echo $_smarty_tpl->tpl_vars['annonce']->value['photo2'];?>
"><img src="/ProjetRacoinNet/<?php echo $_smarty_tpl->tpl_vars['annonce']->value['miniaturephoto2'];?>
"/></a></li>
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['annonce']->value['photo3'])) {?>
                        <li><a href="/ProjetRacoinNet/<?php echo $_smarty_tpl->tpl_vars['annonce']->value['photo3'];?>
"><img src="/ProjetRacoinNet/<?php echo $_smarty_tpl->tpl_vars['annonce']->value['miniaturephoto3'];?>
"/></a></li>
                    <?php }?>
                </ul>
                <dl id="photo">
                    <dd><img id="big_pict" src="/ProjetRacoinNet/<?php echo $_smarty_tpl->tpl_vars['annonce']->value['photo1'];?>
" alt="Photo 1 en taille normale" /></dd>
                </dl>
            </div>
        <?php }?>

        <div class="Annonce">
            <p>Descriptif : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['descriptif'];?>
</p>
            <p>Prix : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['prix'];?>
 euros</p>
            <p>Code postal : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['post'];?>
</p>
            <p>Ville : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['ville'];?>
</p>
            <a href="#" onClick="afficher()">Contacter le vendeur<a/>
                <div id="contact" style="display:none;">
                    <p>Nom : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['nomUtil'];?>
</p>
                    <p>Prénom : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['prenomUtil'];?>
</p>
                    <p>Ville : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['villeUtil'];?>
</p>
                    <p>Code postal : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['postUtil'];?>
</p>
                    <p>Departement : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['deptUtil'];?>
</p>
                    <p>Mail : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['mailUtil'];?>
</p>
                    <p>Téléphone : 0<?php echo $_smarty_tpl->tpl_vars['annonce']->value['phoneUtil'];?>
</p>

                </div>
        </div>
        <hr>
        <a href="#" OnClick="validation()"> Modifier l'annonce</a>
        <a href="#" OnClick="validationSupp()"> Supprimer l'annonce</a>
        <div id="validationSupp" style="display:none;">
            <p> Pour supprimer cette annonce, merci de rentrer l'email et le mot de passe associés à cette annonce</p>
            <form method="POST" action="/ProjetRacoinNet/annonces/suppAnnonce/<?php echo $_smarty_tpl->tpl_vars['annonce']->value['id'];?>
">
                Email : <input type="text" name="mail" />
                Mot de passe : <input type="text" name="pass"/>
                <input type="submit" value="Valider pour supprimer"/>
            </form>

        </div>
        <div id="validation" style="display:none;">
            <p> Pour modifier cette annonce, merci de rentrer l'email et le mot de passe associés à cette annonce</p>
            <form method="POST" action="/ProjetRacoinNet/annonces/modifAnnonce/<?php echo $_smarty_tpl->tpl_vars['annonce']->value['id'];?>
">
                Email : <input type="text" name="mail" />
                Mot de passe : <input type="text" name="pass"/>
                <input type="submit" value="Valider pour modifier"/>
            </form>
        </div>

    </div>
</section><?php }} ?>

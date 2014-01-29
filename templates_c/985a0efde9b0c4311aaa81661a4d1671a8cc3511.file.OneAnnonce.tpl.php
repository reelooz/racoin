<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-29 08:28:39
         compiled from "tpl\OneAnnonce.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1057952e8ba3bb35e67-92980241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '985a0efde9b0c4311aaa81661a4d1671a8cc3511' => 
    array (
      0 => 'tpl\\OneAnnonce.tpl',
      1 => 1390984115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1057952e8ba3bb35e67-92980241',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52e8ba3bc84167_90507149',
  'variables' => 
  array (
    'annonce' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e8ba3bc84167_90507149')) {function content_52e8ba3bc84167_90507149($_smarty_tpl) {?><section>
    <div id="content">
        <h1><?php echo $_smarty_tpl->tpl_vars['annonce']->value['titre'];?>
</h1>
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

        <div >
            <p id="objet"> <?php echo $_smarty_tpl->tpl_vars['annonce']->value['descriptif'];?>
</p>
            <p>Prix : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['prix'];?>
 euros</p>
            <p>Code postal : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['postUtil'];?>
</p>
            <p>Ville : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['villeUtil'];?>
</p>
            <a id="aaffiche" href="#" > [+] Contacter le vendeur<a/>
                <div id="contact" style="display:none;">
                    <p>Nom : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['nomUtil'];?>
</p>
                    <p>Prénom : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['prenomUtil'];?>
</p>
                    <p>Ville : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['villeUtil'];?>
</p>
                    <p>Code postal : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['postUtil'];?>
</p>
                    <p>Mail : <?php echo $_smarty_tpl->tpl_vars['annonce']->value['mailUtil'];?>
</p>
                    <p>Téléphone : 0<?php echo $_smarty_tpl->tpl_vars['annonce']->value['phoneUtil'];?>
</p>

                </div>
        </div>
        <hr>
        <a href="#" id="amodif"  > Modifier l'annonce</a>
        <?php if (isset($_SESSION['id'])) {?>
            <?php ob_start();?><?php echo $_SESSION['admin'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1) {?>
                <a href="/ProjetRacoinNet/annonces/suppAnnonce/<?php echo $_smarty_tpl->tpl_vars['annonce']->value['id'];?>
" OnClick="return confirm ('Voulez-vous vraiment supprimer cette annonce  ?')" > Supprimer l'annonce</a> 
            <?php } else { ?>
                <a href="#" id="asuppr" > Supprimer l'annonce</a>
                <div id="validationSupp" style="display:none;">
                    <p> Pour supprimer cette annonce, merci de rentrer l'email et le mot de passe associés à cette annonce</p>
                    <form method="POST" action="/ProjetRacoinNet/annonces/suppAnnonce/<?php echo $_smarty_tpl->tpl_vars['annonce']->value['id'];?>
">
                        Email : <input type="email" name="mail" />
                        Mot de passe : <input type="password" name="pass"/>
                        <input type="submit" value="Valider pour supprimer"/>
                    </form>
                </div>
            <?php }?>
        <?php } else { ?>
            <a href="#" id="asuppr" > Supprimer l'annonce</a>
            <div id="validationSupp" style="display:none;">
                <p> Pour supprimer cette annonce, merci de rentrer l'email et le mot de passe associés à cette annonce</p>
                <form method="POST" action="/ProjetRacoinNet/annonces/suppAnnonce/<?php echo $_smarty_tpl->tpl_vars['annonce']->value['id'];?>
">
                    Email : <input type="email" name="mail" />
                    Mot de passe : <input type="password" name="pass"/>
                    <input type="submit" value="Valider pour supprimer"/>
                </form>
            </div>


        <?php }?>
        <div id="validation" style="display:none;">
            <p> Pour modifier cette annonce, merci de rentrer l'email et le mot de passe associés à cette annonce</p>
            <form method="POST" action="/ProjetRacoinNet/annonces/modifAnnonce/<?php echo $_smarty_tpl->tpl_vars['annonce']->value['id'];?>
">
                Email : <input type="email" name="mail" />
                Mot de passe : <input type="password" name="pass"/>
                <input type="submit" value="Valider pour modifier"/>
            </form>
        </div>

    </div>
</section><?php }} ?>

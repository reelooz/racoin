<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-14 15:26:28
         compiled from "tpl\Confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:647652d555fbd115b7-27462055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2d7d5aaaa3800ccab8debbd584dc24807d602d5' => 
    array (
      0 => 'tpl\\Confirmation.tpl',
      1 => 1389713184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '647652d555fbd115b7-27462055',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52d555fbd94877_22648677',
  'variables' => 
  array (
    'titre' => 0,
    'message' => 0,
    'annonce' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d555fbd94877_22648677')) {function content_52d555fbd94877_22648677($_smarty_tpl) {?><section>
    <div id="content">
        <h2><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<a href="/ProjetRacoinNet/annonce/<?php echo $_smarty_tpl->tpl_vars['annonce']->value;?>
">celle-ci.</a></p>
        <a href="allAffiche">Retour à l'accueil</a>
    </div>
</div><?php }} ?>

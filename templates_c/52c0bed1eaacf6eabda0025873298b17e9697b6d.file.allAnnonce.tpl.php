<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-08 13:38:05
         compiled from "tpl\allAnnonce.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3169552b17b7eb59989-33488169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52c0bed1eaacf6eabda0025873298b17e9697b6d' => 
    array (
      0 => 'tpl\\allAnnonce.tpl',
      1 => 1389188158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3169552b17b7eb59989-33488169',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52b17b7ed5dd18_63023251',
  'variables' => 
  array (
    'annonces' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b17b7ed5dd18_63023251')) {function content_52b17b7ed5dd18_63023251($_smarty_tpl) {?><section>
    <div id="content">
        <h1 style="border-bottom: solid black 1px;">Annonces</h1>

        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['annonces'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['name'] = 'annonces';
$_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['annonces']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['annonces']['total']);
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['annonces']->value[$_smarty_tpl->getVariable('smarty')->value['section']['annonces']['index']]['id'];?>
">
                <div class="Annonce">
                    <h3>Titre : <?php echo $_smarty_tpl->tpl_vars['annonces']->value[$_smarty_tpl->getVariable('smarty')->value['section']['annonces']['index']]['titre'];?>
</h3>
                    <p>Descriptif : <?php echo $_smarty_tpl->tpl_vars['annonces']->value[$_smarty_tpl->getVariable('smarty')->value['section']['annonces']['index']]['descriptif'];?>
</p>
                    <p>Prix : <?php echo $_smarty_tpl->tpl_vars['annonces']->value[$_smarty_tpl->getVariable('smarty')->value['section']['annonces']['index']]['prix'];?>
 euros</p>
                    <p>Code postal : <?php echo $_smarty_tpl->tpl_vars['annonces']->value[$_smarty_tpl->getVariable('smarty')->value['section']['annonces']['index']]['post'];?>
</p>
                    <p>Ville : <?php echo $_smarty_tpl->tpl_vars['annonces']->value[$_smarty_tpl->getVariable('smarty')->value['section']['annonces']['index']]['ville'];?>
</p>
                </div>
                <hr>
            </a>

        <?php endfor; endif; ?>
    </div>
</section><?php }} ?>

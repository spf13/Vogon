<?php /* Smarty version Smarty-3.1.2, created on 2011-10-05 18:32:35
         compiled from "/Users/steve/Code/Vogon/app/templates/sidemenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18378823314e8bd9b7094f95-76370450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1459e423660e0d767817a4f6a8a33ced3de958a2' => 
    array (
      0 => '/Users/steve/Code/Vogon/app/templates/sidemenu.tpl',
      1 => 1317853954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18378823314e8bd9b7094f95-76370450',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.2',
  'unifunc' => 'content_4e8bd9b70a076',
  'variables' => 
  array (
    'prefix' => 0,
    'action_name' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4e8bd9b70a076')) {function content_4e8bd9b70a076($_smarty_tpl) {?><?php if (!is_callable('smarty_function_slimurl')) include '/Users/steve/Code/Vogon/vendor/Smarty-3.1.2/libs/plugins/function.slimurl.php';
?><div id="sidebar">
    <ul class="sideNav">
        <li><a href="<?php echo smarty_function_slimurl(array('name'=>$_smarty_tpl->tpl_vars['prefix']->value),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['action_name']->value=="List"){?> class="active"<?php }?>>List <?php echo $_smarty_tpl->tpl_vars['section']->value;?>
</a></li>
        <li><a href="<?php echo smarty_function_slimurl(array('name'=>($_smarty_tpl->tpl_vars['prefix']->value).("_create")),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['action_name']->value=="Create"){?> class="active"<?php }?>>Create <?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
</a></li>
    </ul>
    <!-- // .sideNav -->
</div>
<!-- // #sidebar -->
<?php }} ?>
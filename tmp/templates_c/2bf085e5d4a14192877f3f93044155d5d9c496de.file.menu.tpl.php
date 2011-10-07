<?php /* Smarty version Smarty-3.1.2, created on 2011-10-05 15:53:23
         compiled from "/Users/steve/Code/Vogon/app/templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21388682454e8bd9b708a113-79063351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bf085e5d4a14192877f3f93044155d5d9c496de' => 
    array (
      0 => '/Users/steve/Code/Vogon/app/templates/menu.tpl',
      1 => 1317844400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21388682454e8bd9b708a113-79063351',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.2',
  'unifunc' => 'content_4e8bd9b7092b7',
  'variables' => 
  array (
    'prefix' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4e8bd9b7092b7')) {function content_4e8bd9b7092b7($_smarty_tpl) {?><?php if (!is_callable('smarty_function_slimurl')) include '/Users/steve/Code/Vogon/vendor/Smarty-3.1.2/libs/plugins/function.slimurl.php';
?><!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
<ul id="mainNav">
    <li><a href="<?php echo smarty_function_slimurl(array('name'=>'dashboard'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['prefix']->value=='dashboard'){?>class="active"<?php }?>>DASHBOARD</a></li> <!-- Use the "active" class for the active menu item  -->
    <li><a href="<?php echo smarty_function_slimurl(array('name'=>'article'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['prefix']->value=='article'){?>class="active"<?php }?>>Articles</a></li>
    <li><a href="<?php echo smarty_function_slimurl(array('name'=>'user'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['prefix']->value=='user'){?>class="active"<?php }?>>Users</a></li>
    <li><a href="#">Options</a></li>
    <li class="logout"><a href="#">Logout</a></li>
</ul>
<!-- // #end mainNav -->
<?php }} ?>
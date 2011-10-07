<?php /* Smarty version Smarty-3.1.2, created on 2011-10-05 19:03:18
         compiled from "/Users/steve/Code/Vogon/app/templates/users/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6726607634e8bd9b6f33492-56973220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c729a042468229b446b378c7b4b058489d1b82b8' => 
    array (
      0 => '/Users/steve/Code/Vogon/app/templates/users/edit.tpl',
      1 => 1317855410,
      2 => 'file',
    ),
    '644de4c275eec4f7fe810ec93b0334d8da17e89a' => 
    array (
      0 => '/Users/steve/Code/Vogon/app/templates/layout.tpl',
      1 => 1317854208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6726607634e8bd9b6f33492-56973220',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.2',
  'unifunc' => 'content_4e8bd9b708604',
  'variables' => 
  array (
    'action_name' => 0,
    'label' => 0,
    'prefix' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4e8bd9b708604')) {function content_4e8bd9b708604($_smarty_tpl) {?><?php if (!is_callable('smarty_function_slimurl')) include '/Users/steve/Code/Vogon/vendor/Smarty-3.1.2/libs/plugins/function.slimurl.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Vogon :: <?php echo $_smarty_tpl->tpl_vars['action_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['label']->value;?>
 </title>
        <link href="<?php echo smarty_function_slimurl(array('name'=>"transdmin.css"),$_smarty_tpl);?>
" rel="stylesheet" type="text/css" media="screen" />
        <script type="text/javascript" src="<?php echo smarty_function_slimurl(array('name'=>"jquery.js"),$_smarty_tpl);?>
"></script>
        <script type="text/javascript" src="<?php echo smarty_function_slimurl(array('name'=>"jNice.js"),$_smarty_tpl);?>
"></script>
    </head>

    <body>
        <div id="wrapper">
            <!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
            <h1 class="logo"><a href="#"><span> <?php echo $_smarty_tpl->tpl_vars['action_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['label']->value;?>
 </span></a></h1>

            <?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <div id="containerHolder">
                <div id="container">
                    <?php echo $_smarty_tpl->getSubTemplate ('sidemenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


                    <!-- h2 stays for breadcrumbs -->
                    <h2 style="padding-bottom:1em;">
                        <a href="#">Dashboard</a> &raquo; 
                        <a href="<?php echo smarty_function_slimurl(array('name'=>$_smarty_tpl->tpl_vars['prefix']->value),$_smarty_tpl);?>
" <?php if (!isset($_smarty_tpl->tpl_vars['action_name']->value)){?> class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['section']->value;?>
</a> <?php if (isset($_smarty_tpl->tpl_vars['action_name']->value)){?> &raquo; <span class="active"> <?php echo $_smarty_tpl->tpl_vars['action_name']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['action_name']->value=="List"){?> <?php echo $_smarty_tpl->tpl_vars['section']->value;?>
 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['label']->value;?>
 <?php }?> </span> <?php }?>
                    </h2>
                    <div id="main">
                        

    <div class="myform stylized">
        <h1><?php echo $_smarty_tpl->tpl_vars['action_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</h1>
        <form action="<?php if (isset($_smarty_tpl->tpl_vars['form_action']->value)){?><?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
<?php }?>" class="jNice" method="post" >
            <label for="username">Username
                <span class="small">Username is the primary key</span>
            </label>
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['user']->value['_id'])&&$_smarty_tpl->tpl_vars['user']->value['_id']){?> disabled=true <?php }?> name="username">
                <?php if (isset($_smarty_tpl->tpl_vars['user']->value['_id'])&&$_smarty_tpl->tpl_vars['user']->value['_id']){?>
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['_id'];?>
" name="username">
                <?php }?>
            <div style="clear:both">&nbsp;</div>
            <label for="display_name">Display Name
                <span class="small">Will be shown on blog</span>
            </label>
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['display_name'];?>
" name="display_name">

            <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['action_name']->value;?>
" />
            <div style="clear:both">&nbsp;</div>
        </form>
    </div>


                    </div>
                    <!-- // #main -->

                    <div class="clear"></div>
                </div>
                <!-- // #container -->
            </div>
            <!-- // #containerHolder -->
        </div>
        <!-- // #wrapper -->
    </body>
</html>
<?php }} ?>
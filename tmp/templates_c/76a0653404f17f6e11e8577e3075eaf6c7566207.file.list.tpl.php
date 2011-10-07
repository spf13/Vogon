<?php /* Smarty version Smarty-3.1.2, created on 2011-10-06 09:16:43
         compiled from "/Users/steve/Code/Vogon/app/templates/users/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21364045194e8cd76bf14d89-66365973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76a0653404f17f6e11e8577e3075eaf6c7566207' => 
    array (
      0 => '/Users/steve/Code/Vogon/app/templates/users/list.tpl',
      1 => 1317854560,
      2 => 'file',
    ),
    '644de4c275eec4f7fe810ec93b0334d8da17e89a' => 
    array (
      0 => '/Users/steve/Code/Vogon/app/templates/layout.tpl',
      1 => 1317874520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21364045194e8cd76bf14d89-66365973',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.2',
  'unifunc' => 'content_4e8cd76c1001c',
  'variables' => 
  array (
    'action_name' => 0,
    'label' => 0,
    'prefix' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4e8cd76c1001c')) {function content_4e8cd76c1001c($_smarty_tpl) {?><?php if (!is_callable('smarty_function_slimurl')) include '/Users/steve/Code/Vogon/vendor/Smarty-3.1.2/libs/plugins/function.slimurl.php';
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
        <script type="text/javascript" src="<?php echo smarty_function_slimurl(array('name'=>"ckeditor.js"),$_smarty_tpl);?>
"></script>
        <script type="text/javascript" src="<?php echo smarty_function_slimurl(array('name'=>"jqueryckeditor.js"),$_smarty_tpl);?>
"></script>
        <script> $(function() { var config = { skin:'v2' }; $('.cke').ckeditor(config); }); </script>
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
                        
    <?php if ('users'){?>
        <table>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Display name</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['_id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['display_name'];?>
</td>
                    <td><a href="<?php echo smarty_function_slimurl(array('name'=>'user_edit','values'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>
">Edit</a></td>
                    <td><a href="<?php echo smarty_function_slimurl(array('name'=>"user_delete",'values'=>$_smarty_tpl->tpl_vars['user']->value),$_smarty_tpl);?>
">Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php }else{ ?>
        <p>There are currently no users.</p>
    <?php }?>

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
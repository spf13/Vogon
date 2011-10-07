<?php /* Smarty version Smarty-3.1.2, created on 2011-10-06 10:33:34
         compiled from "/Users/steve/Code/Vogon/app/templates/articles/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5208826014e8d3016ef5a19-60675325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d755d977938a1754e86b4e6b9434f04c3c59e76' => 
    array (
      0 => '/Users/steve/Code/Vogon/app/templates/articles/edit.tpl',
      1 => 1317910734,
      2 => 'file',
    ),
    '644de4c275eec4f7fe810ec93b0334d8da17e89a' => 
    array (
      0 => '/Users/steve/Code/Vogon/app/templates/layout.tpl',
      1 => 1317910187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5208826014e8d3016ef5a19-60675325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.2',
  'unifunc' => 'content_4e8d30170b82d',
  'variables' => 
  array (
    'action_name' => 0,
    'label' => 0,
    'prefix' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4e8d30170b82d')) {function content_4e8d30170b82d($_smarty_tpl) {?><?php if (!is_callable('smarty_function_slimurl')) include '/Users/steve/Code/Vogon/vendor/Smarty-3.1.2/libs/plugins/function.slimurl.php';
if (!is_callable('smarty_function_inputbox')) include '/Users/steve/Code/Vogon/vendor/Smarty-3.1.2/libs/plugins/function.inputbox.php';
if (!is_callable('smarty_modifier_implode')) include '/Users/steve/Code/Vogon/vendor/Smarty-3.1.2/libs/plugins/modifier.implode.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/steve/Code/Vogon/vendor/Smarty-3.1.2/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_html_options')) include '/Users/steve/Code/Vogon/vendor/Smarty-3.1.2/libs/plugins/function.html_options.php';
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
        <script type="text/javascript" src="<?php echo smarty_function_slimurl(array('name'=>"ckeditorjquery.js"),$_smarty_tpl);?>
"></script>
        <script> $(function() { var config = { toolbar: [ ['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink'], ['UIColor'] ] }; $('.cke').ckeditor(config); }); </script> 
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
            <?php if (isset($_smarty_tpl->tpl_vars['article']->value['_id'])){?><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['_id'];?>
" name="_id"><?php }?>

            <?php echo smarty_function_inputbox(array('name'=>'title','value'=>$_smarty_tpl->tpl_vars['article']->value['title'],'hint'=>"Title of the article"),$_smarty_tpl);?>


            <label for="content">Content
                <span class="small">The body of the post</span>
            </label>
                <div style="width:98%; margin-top:30px;">
                <textarea class="cke" style="margin:20px; width: 250px;" name="content"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</textarea>
                </div>
            <div style="clear:both">&nbsp;</div>

            <?php echo smarty_function_inputbox(array('name'=>'slug','value'=>$_smarty_tpl->tpl_vars['article']->value['slug'],'hint'=>"url key for this article"),$_smarty_tpl);?>

            <?php echo smarty_function_inputbox(array('name'=>'tags','value'=>smarty_modifier_implode($_smarty_tpl->tpl_vars['article']->value['tags']),'hint'=>"comma separated list"),$_smarty_tpl);?>

            <?php echo smarty_function_inputbox(array('name'=>'categories','value'=>smarty_modifier_implode($_smarty_tpl->tpl_vars['article']->value['categories']),'hint'=>"comma separated list"),$_smarty_tpl);?>

            <?php echo smarty_function_inputbox(array('name'=>'created_at','value'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['created_at'],"%B %e, %Y %H:%M:%S"),'hint'=>"leave blank for now()"),$_smarty_tpl);?>


            <label for="author">Author
                <span class="small">Author of the post</span>
            </label>
            <select name=author>
                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['authors']->value,'selected'=>$_smarty_tpl->tpl_vars['article']->value['author']),$_smarty_tpl);?>

            </select>
            <div style="clear:both">&nbsp;</div>

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
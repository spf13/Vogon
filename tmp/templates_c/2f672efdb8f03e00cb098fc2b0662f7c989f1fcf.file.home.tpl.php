<?php /* Smarty version Smarty-3.1.2, created on 2011-10-06 11:50:07
         compiled from "/Users/steve/Code/Vogon/app/templates/posts/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16791141304e8dcc8ab429c0-50427203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f672efdb8f03e00cb098fc2b0662f7c989f1fcf' => 
    array (
      0 => '/Users/steve/Code/Vogon/app/templates/posts/home.tpl',
      1 => 1317915722,
      2 => 'file',
    ),
    'acfda29fbbba31856c2cb115b83eecc4359d0534' => 
    array (
      0 => '/Users/steve/Code/Vogon/app/templates/public_layout.tpl',
      1 => 1317915994,
      2 => 'file',
    ),
    '7edd4c15168978efa57213d70b59e32235712d51' => 
    array (
      0 => '/Users/steve/Code/Vogon/app/templates/posts/single.tpl',
      1 => 1317916201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16791141304e8dcc8ab429c0-50427203',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.2',
  'unifunc' => 'content_4e8dcc8ac1694',
  'variables' => 
  array (
    'action_name' => 0,
    'label' => 0,
    'posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4e8dcc8ac1694')) {function content_4e8dcc8ac1694($_smarty_tpl) {?><?php if (!is_callable('smarty_function_slimurl')) include '/Users/steve/Code/Vogon/vendor/Smarty-3.1.2/libs/plugins/function.slimurl.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Vogon :: <?php echo $_smarty_tpl->tpl_vars['action_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['label']->value;?>
 </title>
        <link href="<?php echo smarty_function_slimurl(array('name'=>"public.css"),$_smarty_tpl);?>
" rel="stylesheet" type="text/css" media="screen" />
        <script type="text/javascript" src="<?php echo smarty_function_slimurl(array('name'=>"jquery.js"),$_smarty_tpl);?>
"></script>
        <style>
            body{
                font-family: sans-serif;
            }

            #header{
                position:absolute;
                top:0px;
                left:0px;
                width:100%;
                -webkit-box-shadow: 5px 2px 5px -3px #bbbbbb;
                -moz-box-shadow: 5px 2px 5px -3px #bbbbbb;
                box-shadow: 5px 2px 5px -3px #bbbbbb;
                border-bottom:1px solid black;
                background-color:#eee;
                text-align:center;
                height:150px;
            }
            #followmeon{
                font-size:16px;
            }
            #container{
            margin-top:150px;
                margin-left:auto;
                margin-right:auto;
                width:600px;
            }
            ul.tags{
                padding-left:0px;
            }
            ul.tags > a{
            }
            li.post{
                list-style:none;
            }
            li.tag{
                display:inline;
                list-style:none;
            }
            li.tag > a{
                text-decoration:none;
            }
            li.post{
                margin-top:30px;
                padding-bottom:30px;
                margin-bottom:30px;
                border-bottom:1px solid #ddd;
            }
        </style>
    </head>

    <body>
        <div id="header">
          <div id="top_img"><a href="<?php echo smarty_function_slimurl(array('name'=>"home"),$_smarty_tpl);?>
" title="Home"><img height="96" src="<?php echo smarty_function_slimurl(array('name'=>"logo"),$_smarty_tpl);?>
""></a></div>
          <h1 id="blog_title"></h1>
          <div id="followmeon">Follow me on <span class="pictos twitter"><a href="http://twitter.com/spf13" title="@spf13 on Twitter"><b>Twitter</b></a></span> / Check out my <span class="pictos projects"><a href="/projects" title="Projects"><b>Projects</b></a></span></div>
        </div>
        <div id="#nav">
          <h2><a href="/about" title="About Me">About me</a> / <a href="/tagged/best" title="My favorite entries">Read my favorite posts</a> / <a href="/archive" title="Archive">View the archive</a>  </h2>
          <div style="clear:both"><div>
        </div>

        <div id="container">
          
          <ul id="posts">
            <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                <?php /*  Call merged included template "posts/single.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("posts/single.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('post'=>$_smarty_tpl->tpl_vars['post']->value), 0, '16791141304e8dcc8ab429c0-50427203');
content_4e8dce2fbb57e($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "posts/single.tpl" */?>
            <?php }
if (!$_smarty_tpl->tpl_vars['post']->_loop) {
?>
                No Posts found.
            <?php } ?>

          </ul>

          
        </div>
    </body>
</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.2, created on 2011-10-06 11:50:07
         compiled from "/Users/steve/Code/Vogon/app/templates/posts/single.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4e8dce2fbb57e')) {function content_4e8dce2fbb57e($_smarty_tpl) {?><?php if (!is_callable('smarty_function_slimurl')) include '/Users/steve/Code/Vogon/vendor/Smarty-3.1.2/libs/plugins/function.slimurl.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/steve/Code/Vogon/vendor/Smarty-3.1.2/libs/plugins/modifier.date_format.php';
?>    <li class="post">
      <div class="regular content">
        <h3><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</h3>
        <div class="regular_body">
            <?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>

        </div>
      </div>

      <ul class="tags">
        <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
            
            <li class="tag"><a href="<?php echo smarty_function_slimurl(array('name'=>'tag','key'=>'tag','val'=>$_smarty_tpl->tpl_vars['tag']->value),$_smarty_tpl);?>
" title="View all posts tagged #<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
">#<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</a></li>
        <?php } ?>
      </ul>
      <div class="date">
        <?php echo $_smarty_tpl->tpl_vars['post']->value['slug'];?>

        <a href="<?php echo smarty_function_slimurl(array('name'=>'post','key'=>'slug','value'=>$_smarty_tpl->tpl_vars['post']->value['slug']),$_smarty_tpl);?>
" title="Permanent link"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['created_at']);?>
</a>
      </div>
    </li>
<?php }} ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Vogon :: {block name=page_title}{$action_name} {$label}{/block} </title>
        <link href="{slimurl name="transdmin.css"}" rel="stylesheet" type="text/css" media="screen" />
        <script type="text/javascript" src="{slimurl name="jquery.js"}"></script>
        <script type="text/javascript" src="{slimurl name="jNice.js"}"></script>
        <script type="text/javascript" src="{slimurl name="ckeditor.js"}"></script>
        <script type="text/javascript" src="{slimurl name="ckeditorjquery.js"}"></script>
       {literal} <script> $(function() { var config = { toolbar: [ ['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink'], ['UIColor'] ] }; $('.cke').ckeditor(config); }); </script> {/literal}
    </head>

    <body>
        <div id="wrapper">
            <!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
            <h1 class="logo"><a href="#"><span> {block name=page_headline}{$action_name} {$label}{/block} </span></a></h1>

            {include file='menu.tpl'}
            <div id="containerHolder">
                <div id="container">
                    {include file='sidemenu.tpl'}

                    <!-- h2 stays for breadcrumbs -->
                    <h2 style="padding-bottom:1em;">
                        <a href="#">Dashboard</a> &raquo; 
                        {block name=breadcrumb}<a href="{slimurl name=$prefix}" {if !isset($action_name)} class="active"{/if}>{$section}</a> {if isset($action_name)} &raquo; <span class="active"> {$action_name} {if $action_name == "List"} {$section} {else} {$label} {/if} </span> {/if}{/block}
                    </h2>
                    <div id="main">
                        {block name="content"}{/block}
                    </div>
                    <!-- // #main -->

                    <div class="clear"></div>
                </div>
                <!-- // #container -->
            </div>
            <!-- // #containerHolder -->

            {*<p id="footer">Feel free to use and customize it. <a href="http://www.perspectived.com">Credit is appreciated.</a></p>*}
        </div>
        <!-- // #wrapper -->
    </body>
</html>

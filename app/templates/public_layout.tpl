<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Vogon :: {block name=page_title}{$action_name} {$label}{/block} </title>
        <link href="{slimurl name="public.css"}" rel="stylesheet" type="text/css" media="screen" />
        <script type="text/javascript" src="{slimurl name="jquery.js"}"></script>
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
          <div id="top_img"><a href="{slimurl name="home"}" title="Home"><img height="96" src="{slimurl name="logo"}""></a></div>
          <h1 id="blog_title"></h1>
          <div id="followmeon">Follow me on <span class="pictos twitter"><a href="http://twitter.com/spf13" title="@spf13 on Twitter"><b>Twitter</b></a></span> / Check out my <span class="pictos projects"><a href="/projects" title="Projects"><b>Projects</b></a></span></div>
        </div>
        <div id="#nav">
          <h2><a href="/about" title="About Me">About me</a> / <a href="/tagged/best" title="My favorite entries">Read my favorite posts</a> / <a href="/archive" title="Archive">View the archive</a>  </h2>
          <div style="clear:both"><div>
        </div>

        <div id="container">
          {block name=main}
          <ul id="posts">
            {foreach $posts as $post}
                {include file="posts/single.tpl" post=$post}
            {foreachelse}
                No Posts found.
            {/foreach}

          </ul>
          {*<div id="pagers">*}
            {*<p>Page 1 of 2</p>*}
          {*<p><a class="older" href="/tagged/history/page/2">Older entries &gt;</a></p>*}
          {*</div>*}

          {/block}
        </div>
    </body>
</html>

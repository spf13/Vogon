<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Vogon :: {block name=page_title}{$action_name} {$label}{/block} </title>
        <link href="{slimurl name="public.css"}" rel="stylesheet" type="text/css" media="screen" />
        <script type="text/javascript" src="{slimurl name="jquery.js"}"></script>
        <script>
            window.onscroll = function()
            {
                if (window.XMLHttpRequest)
                {
                    d = 289;
                    sticky = document.getElementById('sticky');
                    s_top = document.documentElement.scrollTop;
                    x = self.pageYOffset;
                    if (s_top > d || x > d) {
                        sticky.style.position = 'fixed';
                        sticky.style.top = '0px';
                        sticky.style.paddingLeft = '0px';
                        sticky.className = 'shadowed';
                    } else {
                        sticky.style.position = 'absolute';
                        sticky.style.top = d + 1 + 'px';
                        sticky.className = '';
                    }
                }
            }
        </script>
    </head>

    <body>
        <header>
          <a class="logo" href="{slimurl name="home"}" title="Home"><img src="{slimurl name="img"}/vogon.png"></a>
          <h1 id="blog_title"></h1>
          <h2>Vogon, a simple blogging platform made with <a href="http://php.net/" title="PHP">PHP</a>, <a href="http://mongodb.org" title="mongodb">MongoDB</a> and <a href="http://www.slimframework.com/" title="slim framework">SlimFramework</a></h2>
        </header>
        <nav id="sticky" style="padding-left: 0px; position: absolute; top: 290px;">
          <h2>
              <span>Follow me on <a href="http://twitter.com/spf13" title="@spf13 on Twitter"><b>Twitter</b></a> </span>
              <span>View my photos on <a href="http://flickr.com/photos/spf13" title="spf13 on Flickr"><b>Flickr</b></a> </span>
              <span>Fork me on <a href="http://github.com/spf13/vogon" title="Vogon on Github"><b>GitHub</b></a>  </span>
          </h2>
          <h2>
              <span><a href="#" title="About">About me</a></span>
              <span><a href="{slimurl name="tag"}/fav" title="My favorite entries">Read my favorite posts</a></span>
              <span><a href="#" title="Archive">View the archive</a></span>
          </h2>
        </nav>

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

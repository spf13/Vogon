{extends file='public_layout.tpl'}

{block name=title} {$post.title} {/block}
{block name=main}
<ul id="posts">
    {include file="posts/single.tpl"}
</ul>
{/block}

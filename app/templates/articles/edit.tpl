{extends file='layout.tpl'}

{block name=content}

    <div class="myform stylized">
        <h1>{$action_name} {$label}</h1>
        <form action="{if isset($form_action)}{$form_action}{/if}" class="jNice" method="post" >
            {if isset($article._id)}<input type="hidden" value="{$article._id}" name="_id">{/if}

            {inputbox name=title value=$article.title hint="Title of the article"}

            <label for="content">Content
                <span class="small">The body of the post</span>
            </label>
                <div style="width:98%; margin-top:30px;">
                <textarea class="cke" style="margin:20px; width: 250px;" name="content">{$article.content}</textarea>
                </div>
            <div style="clear:both">&nbsp;</div>

            {inputbox name=slug value=$article.slug hint="url key for this article"}
            {inputbox name=tags value=$article.tags|implode hint="comma separated list"}
            {inputbox name=categories value=$article.categories|implode hint="comma separated list"}
            {inputbox name=created_at value=$article.created_at->sec|date_format:"%B %e, %Y %H:%M:%S" hint="leave blank for now()"}

            <label for="author">Author
                <span class="small">Author of the post</span>
            </label>
            <select name=author>
                {html_options options=$authors selected=$article.author}
            </select>
            <div style="clear:both">&nbsp;</div>

            <input type="submit" value="{$action_name}" />
            <div style="clear:both">&nbsp;</div>
        </form>
    </div>

{/block}

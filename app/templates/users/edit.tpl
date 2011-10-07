{extends file='layout.tpl'}

{block name=content}

    <div class="myform stylized">
        <h1>{$action_name} {$label}</h1>
        <form action="{if isset($form_action)}{$form_action}{/if}" class="jNice" method="post" >
            <label for="username">Username
                <span class="small">Username is the primary key</span>
            </label>
                <input type="text" value="{$user._id}" {if isset($user._id) && $user._id} disabled=true {/if} name="username">
                {if isset($user._id) && $user._id}
                    <input type="hidden" value="{$user._id}" name="username">
                {/if}
            <div style="clear:both">&nbsp;</div>
            <label for="display_name">Display Name
                <span class="small">Will be shown on blog</span>
            </label>
                <input type="text" value="{$user.display_name}" name="display_name">

            <input type="submit" value="{$action_name}" />
            <div style="clear:both">&nbsp;</div>
        </form>
    </div>

{/block}

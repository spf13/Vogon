{extends file='layout.tpl'}

{block name=content}
    {if users}
        <table>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Display name</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>

                {foreach from=$users item=user}
                <tr>
                    <td>{$user._id}</td>
                    <td>{$user.display_name}</td>
                    <td><a href="{slimurl name='user_edit' values=$user}">Edit</a></td>
                    <td><a href="{slimurl name="user_delete" values=$user}">Delete</a></td>
                </tr>
                {/foreach}
            </tbody>
        </table>
    {else}
        <p>There are currently no users.</p>
    {/if}
{/block}

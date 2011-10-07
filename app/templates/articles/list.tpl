{extends file='layout.tpl'}

{block name=content}
    {if articles}
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Create Date</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>

                {foreach from=$articles item=article}
                <tr>
                    <td>{$article.title}</td>
                    <td>{$article.created_at|date_format}</td>
                    <td><a href="{slimurl name='article_edit' values=$article}">Edit</a></td>
                    <td><a href="{slimurl name="article_delete" values=$article}">Delete</a></td>
                </tr>
                {/foreach}
            </tbody>
        </table>
    {else}
        <p>There are currently no articles.</p>
    {/if}
{/block}

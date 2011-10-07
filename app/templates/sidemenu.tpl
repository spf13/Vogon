<div id="sidebar">
    <ul class="sideNav">
        <li><a href="{slimurl name=$prefix}" {if $action_name eq "List"} class="active"{/if}>List {$section}</a></li>
        <li><a href="{slimurl name=$prefix|cat:"_create"}" {if $action_name eq "Create"} class="active"{/if}>Create {$prefix}</a></li>
    </ul>
    <!-- // .sideNav -->
</div>
<!-- // #sidebar -->

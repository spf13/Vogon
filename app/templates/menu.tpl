<!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
<ul id="mainNav">
    <li><a href="{slimurl name=dashboard}" {if $prefix eq 'dashboard'}class="active"{/if}>DASHBOARD</a></li> <!-- Use the "active" class for the active menu item  -->
    <li><a href="{slimurl name=article}" {if $prefix eq 'article'}class="active"{/if}>Articles</a></li>
    <li><a href="{slimurl name=user}" {if $prefix eq 'user'}class="active"{/if}>Users</a></li>
    <li><a href="#">Options</a></li>
    <li class="logout"><a href="#">Logout</a></li>
</ul>
<!-- // #end mainNav -->

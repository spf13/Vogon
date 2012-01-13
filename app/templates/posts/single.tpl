    <li class="post">
        <h3 class="post_title">{$post.title}</h3>
        <span class="date"><a href="{slimurl name=post key=slug val=$post.slug}" title="Permanent link">{$post.created_at->sec|date_format}</a> by {$authors.{$post.author}.display_name}</span>
        <div class="post_body">
            {$post.content}
        </div>

      <ul class="tags">
        {foreach $post.tags as $tag}
            <li class="tag"><a href="{slimurl name=tag key=tag val=$tag}" title="View all posts tagged #{$tag}">#{$tag}</a></li>
        {/foreach}
      </ul>
    </li>

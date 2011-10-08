    <li class="post">
        <h3 class="post_title">{$post.title}</h3>
        <a class="date" href="{slimurl name=post key=slug value=$post.slug}" title="Permanent link">{$post.created_at|date_format}</a>
        <div class="post_body">
            {$post.content}
        </div>

      <ul class="tags">
        {foreach $post.tags as $tag}
            <li class="tag"><a href="{slimurl name=tag key=tag val=$tag}" title="View all posts tagged #{$tag}">#{$tag}</a></li>
        {/foreach}
      </ul>
    </li>

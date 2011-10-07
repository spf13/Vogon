    <li class="post">
      <div class="regular content">
        <h3>{$post.title}</h3>
        <div class="regular_body">
            {$post.content}
        </div>
      </div>

      <ul class="tags">
        {foreach $post.tags as $tag}
            
            <li class="tag"><a href="{slimurl name=tag key=tag val=$tag}" title="View all posts tagged #{$tag}">#{$tag}</a></li>
        {/foreach}
      </ul>
      <div class="date">
        {$post.slug}
        <a href="{slimurl name=post key=slug value=$post.slug}" title="Permanent link">{$post.created_at|date_format}</a>
      </div>
    </li>

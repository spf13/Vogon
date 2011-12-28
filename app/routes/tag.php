<?php

class tag_route {

    var $base = "/tag/";
    var $prefix = "tag";

    public function page_init() { }

    function __construct() {
        $s = Slim::getInstance();
        $prefix = $this->prefix;

        $s->get($this->base . "(:tag)", $this->page_init(), function ($tag) use ($s) {
            return $s->render('posts/tag.tpl', array(
                'tag' => $tag,
                'label' => 'Posts by Tag',
                'action_name' => 'List',
                'posts' => $s->db->articles->find(array('tags' => $tag))));
        })->name($prefix);
    }
}

new tag_route();

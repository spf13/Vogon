<?php

class tag_route {

    var $base = "/tag/";
    var $prefix = "tag";

    public function page_init() { }

    function __construct() {
        $s = Slim::getInstance();
        $prefix = $this->prefix;

        $author_list = $s->db->users->find();
        $authors = array();
        foreach ($author_list as $a) {
            $authors[$a['_id']] = $a['display_name'];
        }

        $s->get($this->base . "(:tag)", $this->page_init(), function ($tag) use ($s, $authors) {
            return $s->render('posts/tag.tpl', array(
                'tag' => $tag,
                'label' => 'Posts by Tag',
                'action_name' => 'List',
                'authors' => $authors,
                'posts' => $s->db->articles->find(array('tags' => $tag))));
        })->name($prefix);
    }
}

new tag_route();

<?php

class post_route {

    var $base = "/post/";
    var $prefix = "post";

    public function page_init() { }

    function __construct() {
        $s = Slim::getInstance();
        $prefix = $this->prefix;

        $author_list = $s->db->users->find();
        $authors = array();
        foreach ($author_list as $a) {
            $authors[$a['_id']] = $a['display_name'];
        }

        $s->get($this->base . "(:slug)", $this->page_init(), function ($slug) use ($s, $authors) {
            return $s->render('posts/view.tpl', array(
                'action_name' => 'List',
                'label' => 'Post',
                'authors' => $authors,
                'post' => $s->db->articles->findone(array('slug' => $slug))
            ));
        })->name($prefix);

        $s->get("/", $this->page_init(), function () use ($s, $authors) {
            return $s->render('posts/home.tpl', array(
                'action_name' => 'List',
                'label' => 'Posts',
                'authors' => $authors,
                'posts' => $s->db->articles->find()
            ));
        })->name('home');
    }
}

new post_route();

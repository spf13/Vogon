<?php

class post_route {

    var $base = "/post/";
    var $prefix = "post";

    public function page_init() { }

    function __construct() {
        $s = Slim::getInstance();
        $prefix = $this->prefix;

        $s->get($this->base . "(:slug)", $this->page_init(), function ($slug) use ($s) {
            return $s->render('posts/view.tpl', array(
                'action_name' => 'List',
                'label' => 'Post',
                'post' => $s->db->articles->findone(array('slug' => $slug))
            ));
        })->name($prefix);

        $s->get("/", $this->page_init(), function () use ($s) {
            return $s->render('posts/home.tpl', array(
                'action_name' => 'List',
                'label' => 'Posts',
                'posts' => $s->db->articles->find()
            ));
        })->name('home');
    }
}

new post_route();

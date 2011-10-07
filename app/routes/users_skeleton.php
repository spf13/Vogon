<?php

class user_route {

    var $base = "/admin/user/";
    var $prefix = "user";

    public function page_init() {
          auth::check();
    }

    public function post_init()
    {
          auth::check();
    }

    function __construct() {

        $s = Slim::getInstance();

        $s->get($this->base, $this->page_init(), function () {

            echo "Hello";

        })->name($this->prefix . '_list');


        $s->get($this->base . 'create', $this->page_init(), function () {

            echo "Hello";

        })->name($this->prefix . '_create');


        $s->post($this->base . 'create', $this->post_init(), function () {

            echo "Hello";

        })->name($this->prefix . '_create_post');


        $s->get($this->base . '(:username)/edit', $this->page_init(), function ($username) {

            echo "Hello, $username!";

        })->name($this->prefix . '_edit');


        $s->post($this->base . '(:username)/edit', $this->post_init(), function ($username) {

            echo "Hello, $username!";

        })->name($this->prefix . '_edit_post');


        $s->get($this->base . '(:username)', $this->page_init(), function ($username) {

            echo "Hello, $username!";

        })->name($this->prefix . '_view');


        $s->get($this->base . '(:username)/delete', $this->page_init(), function ($username) {

            echo "Hello, $username!";

        })->name($this->prefix . '_delete');

    }
}


new user_route();

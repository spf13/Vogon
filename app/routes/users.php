<?php

class users_route {

    var $base = "/admin/user/";
    var $prefix = "user";

    public function page_init() {
          auth::check();
    }

    public function post_init() {
          auth::check();
    }

    public static function set_view_data() {
          $s = Slim::getInstance();
          $s->view()->setData('section', 'Users');
          $s->view()->setData('label', 'User');
          $s->view()->setData('prefix', 'user');
    }

    function __construct() {
        $s = Slim::getInstance();
        $prefix = $this->prefix;

        $s->get($this->base, $this->page_init(), function () use ($s, $prefix) {
            users_route::set_view_data();
            return $s->render('users/list.tpl', array('action_name' => 'List', 'users' => $s->db->users->find()));
        })->name($prefix);

        $s->get($this->base . 'create', $this->page_init(), function () use ($s, $prefix) {
            users_route::set_view_data();
            return $s->render('users/edit.tpl', array('action_name' => 'Create', 'user' => (array) new User()));
        })->name($prefix . '_create');

        $s->post($this->base . 'create', $this->post_init(), function () use ($s,$prefix) {
            $user = new User();
            $user->_id = $s->request()->post('username');
            $user->display_name = $s->request()->post('display_name');
            $s->db->users->save($user);
            $s->redirect($s->urlFor($prefix));
        })->name($prefix . '_create_post');

        $s->get($this->base . '(:_id)/edit', $this->page_init(), function ($_id) use ($s,$prefix) {
            users_route::set_view_data();
            $user = $s->db->users->findOne(array( '_id' => $_id));
            if (empty($user)) { $s->notFound(); }
            return $s->render('users/edit.tpl', array( 'form_action' => $s->urlFor($prefix . "_create"), 'action_name' 	=> 	'Edit', 'user' => $user));
        })->name($prefix . '_edit');

        $s->get($this->base . '(:_id)/delete', $this->post_init(), function ($_id) use ($s,$prefix) {
            $s->db->users->remove(array('_id' => $_id), array("justOne" => true));
            $s->redirect($s->urlFor($prefix));
        })->name($prefix . '_delete');

        $s->get($this->base . '(:_id)', $this->page_init(), function ($_id) {
            users_route::set_view_data();
            echo "Hello, $_id!";
        })->name($prefix . '_view');
    }
}

new users_route();

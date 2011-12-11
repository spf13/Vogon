<?php

class articles_route {

    var $base = "/admin/article/";
    var $prefix = "article";

    public function page_init() {
          auth::check();
    }

    public function post_init() {
          auth::check();
    }

    public static function set_view_data() {
        $s = Slim::getInstance();
        $s->view()->setData('section', 'Articles');
        $s->view()->setData('label', 'Article');
        $s->view()->setData('prefix', 'article');
    }

    function __construct() {
        $s = Slim::getInstance();
        $prefix = $this->prefix;

        $s->get($this->base, $this->page_init(), function () use ($s) {
            articles_route::set_view_data();
            return $s->render('articles/list.tpl', array('action_name' => 'List', 'articles' => $s->db->articles->find()));
        })->name($prefix);

        $s->get($this->base . 'create', $this->page_init(), function () use ($s) {
            articles_route::set_view_data();
            foreach($s->db->users->find() as $author) {
                $authors[$author['_id']] = $author['display_name'];
            }
            return $s->render('articles/edit.tpl', array(
                'authors' => $authors,
                'action_name' => 'Create',
                'article' => (array) new article()
            ));
        })->name($prefix . '_create');

        $s->post($this->base . 'create', $this->post_init(), function () use ($s,$prefix) {
            $article = new article();
            if ($s->request()->post('_id')) {
                $article->_id = new MongoId($s->request()->post('_id'));
            }
            $trim_array = $s->trim_array;
            $article->title = $s->request()->post('title');
            $article->slug = $s->request()->post('slug');
            $article->content = $s->request()->post('content');
            $article->author = $s->request()->post('author');
            $article->tags = $trim_array(explode(",", $s->request()->post('tags')));
            $article->categories = $trim_array(explode(",", $s->request()->post('categories')));
            $article->created_at = new MongoDate(strtotime($s->request()->post('created_at')));

            $s->db->articles->save($article);
            $s->redirect($s->urlFor($prefix));
        })->name($prefix . '_create_post');

        $s->get($this->base . '(:_id)/edit', $this->page_init(), function ($_id) use ($s,$prefix) {
            articles_route::set_view_data();
            foreach($s->db->users->find() as $author) {
                $authors[$author['_id']] = $author['display_name'];
            }
            $article = $s->db->articles->findOne(array( '_id' => new MongoId($_id)));
            if (empty($article)) { $s->notFound(); }
                return $s->render('articles/edit.tpl', array(
                    'authors' => $authors,
                    'form_action' => $s->urlFor($prefix . "_create"),
                    'action_name' => 'Edit',
                    'article' => $article
                ));
        })->name($prefix . '_edit');

        $s->get($this->base . '(:_id)/delete', $this->post_init(), function ($_id) use ($s,$prefix) {
            $s->db->articles->remove(array('_id' => $_id), array("justOne" => true));
            $s->redirect($s->urlFor($prefix));
        })->name($prefix . '_delete');

        $s->get($this->base . '(:_id)', $this->page_init(), function ($_id) {
            articles_route::set_view_data();
            echo "Hello, $_id!";
        })->name($prefix . '_view');
    }
}

new articles_route();

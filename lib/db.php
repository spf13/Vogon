<?php
$connection = new Mongo();
$db = $connection->iblog;

$s->db = $db;

class Article {
    public $title;
    public $author;
    public $slug;
    public $content;
    public $created_at;
    public $tags;
    public $categories;
    public $type;
}

class User {
    public $_id;
    public $display_name;
    public $password;
}

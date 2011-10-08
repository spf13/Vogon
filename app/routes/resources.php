<?php

class resources {
    function __construct() {
        $s = Slim::getInstance();

        $s->get('/style/css', function () { })->name('css');
        $s->get('/style/js', function () { })->name('js');
        $s->get('/style/img', function () { })->name('img');

        $s->get('/style/css/transdmin.css', function () { })->name('transdmin.css');
        $s->get('/style/css/public.css', function () { })->name('public.css');
        $s->get('/style/js/jNice.js', function () { })->name('jNice.js');
        $s->get('/style/js/jquery.js', function () { })->name('jquery.js');
        $s->get('/ckeditor/ckeditor.js', function () { })->name('ckeditor.js');
        $s->get('/ckeditor/adapters/jquery.js', function () { })->name('ckeditorjquery.js');
    }
}

new resources();

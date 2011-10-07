<?php

const BASE_DIR = __DIR__;

//Require the Slim Framework
require_once 'Slim/Slim.php';

// Require the custom View
require_once 'Slim/Views/SmartyView.php';

SmartyView::$smartyDirectory = BASE_DIR . '/vendor/smarty/libs';
SmartyView::$smartyCompileDirectory = BASE_DIR . '/tmp/templates_c';
SmartyView::$smartyCacheDirectory = BASE_DIR . '/tmp/smarty_cache';
SmartyView::$smartyTemplatesDirectory = BASE_DIR . '/app/templates';
// Init Slim app with the custom View
$s = new slim(array('view' => new SmartyView()));
$s->config('templates.path', SmartyView::$smartyTemplatesDirectory);

require 'lib/helpers.php';
require 'lib/auth.php';
require 'lib/db.php';

require 'app/routes/resources.php';
require 'app/routes/users.php';
require 'app/routes/post.php';
require 'app/routes/tag.php';
require 'app/routes/admin.php';
require 'app/routes/articles.php';


$s->run();

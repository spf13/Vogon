<?php
define('USERNAME', 'admin');
define('PASSWORD', 'password');

class auth {

    static function check() {
        $s = Slim::getInstance();

        $authRequest 	= isset($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']);
        $authUser 		= $authRequest && $_SERVER['PHP_AUTH_USER'] === USERNAME;
        $authPass 		= $authRequest && $_SERVER['PHP_AUTH_PW'] === PASSWORD;

        if (! $authUser || ! $authPass) {
            $s->response()->header('WWW-Authenticate: Basic realm="My Blog Administration"', '');
            $s->response()->header('HTTP/1.1 401 Unauthorized', '');
            $s->response()->body('<h1>Please enter valid administration credentials</h1>');
            $s->response()->send();
            exit;
        }
    }
}

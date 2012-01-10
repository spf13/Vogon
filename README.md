Vogon is a very simple blogging platform built with PHP, MongoDB and the Slim Framework.

It is intended to be simple, and fast.

## Status

Currently very much in an alpha state. Some basic functionality works at this point.

You can create users and posts, view posts and view posts by tag.

It's configured to connect to mongodb on localhost (can be configured in lib/db.php).

login is admin : password (configured in the lib/auth.php file). 

users are not yet used for loggin in but rather as authors for the posts.

## Installation

1. Point the web root at public.
2. Make sure the webserver can write to the tmp directory.
3. Edit templates as desired in app/templates/
4. Change password (and username) in lib/auth.php
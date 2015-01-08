<?php
// index.php

// charge et initialise les bibliothèques globales
require_once 'model.php';
require_once 'controllers.php';

// route la requête en interne
$uri = $_SERVER['REQUEST_URI'];

if ('/ISL/2014-12-18_symfony/index.php' == $uri) {
	list_action();
} elseif ('/ISL/2014-12-18_symfony/index.php/show' == $uri && isset($_GET['id'])) {
	show_action($_GET['id']);
} else {
	header('Status: 404 Not Found');
	echo '<html><body><h1>Page Not Found</h1></body></html>';
}
<?php
// REéUPéRATION DE L'AUTOLOADER
require_once 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;




// charge et initialise les bibliothèques globales
// require_once 'model.php';
// require_once 'controllers.php';

// route la requête en interne
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (strstr($uri, '/index.php')) {
	list_action();
}elseif (strstr($uri, '/index.php/show') && isset($_GET['id'])) {
	show_action($_GET['id']);
} else {

	header('Status: 404 Not Found');

	echo '<html><body><h1>Page Not Found</h1></body></html>';

}
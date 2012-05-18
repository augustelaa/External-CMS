<?php

if (isset($_GET['link'])) {
    $url = explode('/', $_GET['link']);
} else {
    $url = explode('/', 'index');
}

DEFINE('PATH', '/./');
DEFINE('RPATH', PATH . $url);

require PATH. 'modules/modules.php';
require PATH. 'motor/index.php';

$index = new motor($url[0]);

?>
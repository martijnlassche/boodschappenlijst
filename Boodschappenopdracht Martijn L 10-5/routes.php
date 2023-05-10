<?php



$router->get('', 'controllers/index.php');
$router->get('groceries', 'controllers/index.php');
$router->get('groceries/create', 'controllers/groceries-create.php');
$router->post('grocery', 'controllers/new-grocery.php');
$router->get('contact-our-company', 'controllers/contact.php');


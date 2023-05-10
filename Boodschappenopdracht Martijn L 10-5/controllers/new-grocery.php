<?php

$app['database']->insert('groceries', [
    'name' => $_POST['grocery']
]);

echo"<h1> Dank voor input </h1>\nBinnen 5 seconden wordt u automatisch teruggestuurd naar de homepage.";

header("Refresh:5; url=/");
exit();


// var_dump('You typed ' . $_POST['grocery']);
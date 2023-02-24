<?php

require('vendor/autoload.php');

$loader = new \Twig\Loader\FilesystemLoader('./templates');

$twig = new \Twig\Environment($loader);

$template = $twig->load('teste.html');

echo $template->render([
    'nome' => 'Gustavo',
    'idade' => 18,
    'titulo' => 'Testando',
]);
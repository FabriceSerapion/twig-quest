<?php

require_once __DIR__ . '/../config/twig.php';

$name = 'Wilder';

echo $twig->render('_home.html.twig', ['name' => $name]);

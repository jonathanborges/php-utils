<?php

require __DIR__ . '/vendor/autoload.php';

use PHPUtils\PHPUtils;

echo '<pre>';

print_r(PHPUtils::concatArraysInSequence(
	array('nome' => array('Jonathan', 'Brenda', 'Kleber', 'Adelino', '')),
	array('numero' => array(1,2,3,4,5)),
	array('fala' => array('alo', 'Tudo bem', 'Teste', 'Hey', 'Nice'))
));

$var = PHPUtils::fillArrayWithValue(array(1,2,5), 0, 10, 0, false);
print_r($var);
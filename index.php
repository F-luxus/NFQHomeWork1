<?php

$loader = require_once __DIR__ . '/vendor/autoload.php';

use function Nfq\Akademija\NotTyped\calculateHomeWorkSum as FunkcijaNotTyped;
use function Nfq\Akademija\Soft\calculateHomeWorkSum as FunkcijaSoft;
use function Nfq\Akademija\Strict\calculateHomeWorkSum as FunkcijaStrict;
try {
	echo 'calculateHomeWorkSum: '.calculateHomeWorkSum(3,2.2,'1').PHP_EOL;
	echo 'Nfq\Akademija\NotTyped\calculateHomeWorkSum: '.FunkcijaNotTyped(3,2.2,'1').PHP_EOL;
	echo 'Nfq\Akademija\Soft\calculateHomeWorkSum: '.FunkcijaSoft(3,2.2,'1').PHP_EOL;
	echo 'Nfq\Akademija\Strict\calculateHomeWorkSum: '.FunkcijaStrict(3,2.2,'1').PHP_EOL;

} catch (TypeError $e) {
    echo 'Error: '.$e->getMessage();
}
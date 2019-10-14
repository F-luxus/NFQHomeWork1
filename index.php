<?php
$loader = require_once __DIR__ . '/vendor/autoload.php';
$consoleColor = new JakubOnderka\PhpConsoleColor\ConsoleColor();

use function Nfq\Akademija\NotTyped\calculateHomeWorkSum as FunkcijaNotTyped;
use function Nfq\Akademija\Soft\calculateHomeWorkSum as FunkcijaSoft;
use function Nfq\Akademija\Strict\calculateHomeWorkSum as FunkcijaStrict;

echo $consoleColor->apply("light_green", 'calculateHomeWorkSum: '.calculateHomeWorkSum(3,2.2,'1').PHP_EOL);
echo $consoleColor->apply("light_blue", 'Nfq\Akademija\NotTyped\calculateHomeWorkSum: '.FunkcijaNotTyped(3,2.2,'1').PHP_EOL);
echo $consoleColor->apply("light_green", 'Nfq\Akademija\Soft\calculateHomeWorkSum: '.FunkcijaSoft(3,2.2,'1').PHP_EOL);
echo $consoleColor->apply("light_blue", 'Nfq\Akademija\Strict\calculateHomeWorkSum: '.FunkcijaStrict(3,2.2,'1').PHP_EOL);
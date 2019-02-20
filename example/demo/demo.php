<?php
require 'vendor/autoload.php';
use Suyaoli\PhpCommonLibDemo\Calculator;

$calculator=new Calculator();

echo $calculator->selfAdd(1);
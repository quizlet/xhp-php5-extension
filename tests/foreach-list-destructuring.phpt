--TEST--
PHP5.5 foreach ($list as list($a, $b ...))
--SKIPIF--
<?php
if (version_compare(PHP_VERSION, '5.5', '<')) exit("Skip This test is for PHP 5.5 only.");
?>
--FILE--
<?php

$list = [
  ['orange', 'apple'],
  ['foo', 'bar'],
];
foreach ($list as list($a, $b)) {
  echo $a . " " . $b . "\n";
}

--EXPECT--
orange apple
foo bar

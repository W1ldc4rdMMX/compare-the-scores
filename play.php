<?php
use Fun\CompareTheScores;
use Symfony\Component\VarDumper\VarDumper;

include("vendor/autoload.php");

// Gets the two lines from standard input (is there a better way of doing this?):
$handle = fopen("php://stdin", "r");
fscanf($handle,"%d %d %d %d",$a0,$a1,$a2,$a3);
fscanf($handle,"%d %d %d %d",$b0,$b1,$b2,$b3);

//VarDumper::dump(array($a0, $a1, $a2, $a3));
//VarDumper::dump(array($b0, $b1, $b2, $b3));

$comparer = new CompareTheScores();
$comparer->DUX(array($a0, $a1, $a2, $a3),array($b0, $b1, $b2, $b3));

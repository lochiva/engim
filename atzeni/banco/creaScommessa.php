<?php

include "index.php";

$scommesse = [];

if ($_SERVER["REQUEST_METHOD"]==="POST"){

$scommessa = [
	"estrazione"=>"",
	"scommettitori"=>"",
	"stato"=>"",
	"vincitore"=>""
];

array_push($scommesse, [$_POST["betName"]=>$scommessa]);



var_dump($scommesse);

}


















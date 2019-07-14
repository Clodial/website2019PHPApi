<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require "testclasses/Test.php";

$testApi = new Test();
$testApi->$name = "Test App Name";

echo $testApi->sendBasicData();

?>
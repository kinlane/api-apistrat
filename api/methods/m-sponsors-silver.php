<?php

$route = '/sponsors/silver/';
$app->get($route, function ()  use ($app){

  $ReturnObject = array();

 	$request = $app->request();
 	$params = $request->params();

  $File = file_get_contents("http://austin2015.apistrat.com/sposorsn/silver.json");

  $ReturnObject = $File;

  $app->response()->header("Content-Type", "application/json");

  echo $File;

  });

?>

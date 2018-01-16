<?php

 require 'guzzle/autoload.php';

 $client = new \GuzzleHttp\Client();
 $response = $client->get('https://docs.google.com/spreadsheets/d/e/2PACX-1vR80z5b8Vl95K2NLq51DxtS0Blf3RU_UySwK-HLAK9HZ-t5CgYXX9Xvcm0TGONwKJ21bdDfhO_gkQrA/pubhtml')->send();
 // On s'assure que le document est rouvé et qu'il est décodable
 if( 200===$response->getStatusCode() && $globalJson=$response->json())
 {
 // Le contenu au format json...
 die(var_dump($globalJson));
 }
 else {
 die('Error');
 }
 
 ?>
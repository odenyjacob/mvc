<?php

//$url = $_GET['url'];

$url = explode('/', $_GET['url']);

print_r($url);

require 'controllers/' . $url[0] . '.php';
$controller = new $url[0];


if (isset($url[2])) {
	$controller -> {$url[1]}($url[2]);

} else {

if (isset($url[1])) {
	$controller -> {$url[1]}();

	}
}
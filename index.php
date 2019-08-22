<?php
//$url = $_GET['url'];
$url = filter_input(INPUT_GET,'url');

echo $url;

//require 'controllers/'.'url'.'.php';
require 'controllers/'.$url.'.php';
//require 'controllers/'.'index.php';
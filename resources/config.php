<?php

$config = array(
    "db" => array(
        "dbname" => "medieval",
        "username" => "root",
        "password" => "admin",
        "host" => "localhost"
    )
);

if(isset($_GET['url'])) $segments = explode("/",$_GET['url']);

defined("LIBRARY_PATH")
or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));

defined("TEMPLATES_PATH")
or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));

defined("SRC_PATH")
or define("SRC_PATH", realpath(dirname(__FILE__) . '/../src'));

/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);

defined("DEBUG")
or define("DEBUG",true);

?>
<?php

require_once(realpath("resources/config.php"));

require_once(LIBRARY_PATH . "/templateFunctions.php");

if($segments[0]=='hello')
    renderLayoutWithContentFile("home.php", array('name'=>$segments[1]));
else
    renderLayoutWithContentFile("home.php", array('name'=>'Bro'));

?>
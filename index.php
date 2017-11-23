<?php

require_once(realpath("resources/config.php"));

require_once(LIBRARY_PATH . "/templateFunctions.php");

if(count($segments)>0)
    renderLayoutWithContentFile($segments[0].".php", array('name'=>$segments[1]));
else
    renderLayoutWithContentFile("home.php" );

?>
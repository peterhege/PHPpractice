<?php

require_once(realpath("resources/config.php"));

require_once(LIBRARY_PATH . "/templateFunctions.php");

if(count($segments)>0)
    renderLayoutWithContentFile($segments[0].".php", array('segments'=>$segments));
else
    renderLayoutWithContentFile("home.php" );

?>
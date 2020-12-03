<?php

spl_autoload_register(function($nameClass){

    $dirClass = "class";
    $filename = $dirClass . DIRECTORY_SEPARATOR . ".PHP";
    if(file_exists($filename) === true){

        require_once($filename);

    }


});


?>
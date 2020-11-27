<?php

function teste($callback){

    $callback();

}

teste(function(){

    echo "Terminou!";

});


?>


<br>

<?php

$fn = function($a){

    var_dump($a);


};

$fn("Oi");
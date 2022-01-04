<?php

require 'vendor/autoload.php';
$f3 = \Base::instance();

class Greeting {
    function display() {
        echo 'Good evening';
    }
}

$f3->route('GET /', 'Greeting->display');

$f3->run();

?>
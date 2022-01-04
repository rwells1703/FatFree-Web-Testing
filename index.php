<?php

require 'vendor/autoload.php';
$f3 = \Base::instance();

class Colors {
    function red() {
        echo "The color of fire";
    }

    function blue() {
        echo "The color of the sea";
    }
}

$f3->route('GET /colors/@color', 'Colors->@color');

$f3->run();

?>
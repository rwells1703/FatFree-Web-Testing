<?php

require 'vendor/autoload.php';
$f3 = \Base::instance();

class WebPage {
    function display() {
        echo 'Good evening!';
    }
}

$f3->route('GET /','WebPage->display');

$f3->run();

?>
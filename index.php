<?php

require 'vendor/autoload.php';
$f3 = \Base::instance();

class WebPage {
    function display() {
        echo 'Good evening!';
    }
}

$f3->route('GET /','WebPage->display');

$f3->route('GET /socks/@count',
    function($f3) {
        echo $f3->get('PARAMS.count').' socks in the drawer';
    }
);

$f3->run();

?>
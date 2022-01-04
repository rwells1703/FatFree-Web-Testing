<?php

require 'vendor/autoload.php';
$f3 = \Base::instance();

class Cat {
    function speak($f3,$params) {
        $name = $params['name'];
         
        if ($name == "Sam") {
            echo 'MEOW';
        } else if ($name == "Lily") {
            echo 'MEEEEEOOOOOOWOWOWOWOW';
        } else {
            echo 'IM NOT A CAT';
        }
    }
}
$f3->route('GET @cat_speak: /cat/@name', 'Cat->speak');

$f3->run();

?>
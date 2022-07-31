<?php
class material_test {
    function __construct() {
        include '../material.inc.php';
        var_dump($this->boards); // whatever your var
    }
}
// stub
function clienttranslate($x) { return $x; }

new material_test();
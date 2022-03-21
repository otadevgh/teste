<?php

require "inc/lessc.inc.php";

$less = new lessc;
try {
    $less->compileFile("assets/css/main.less");
    $less->checkedCompile("assets/css/main.less", "assets/css/main.css");
} catch (exception $e) {
    echo "main: " . $e->getMessage();
}

try {
    $less->compileFile("assets/css/_cix_boxlist.less");
    $less->checkedCompile("assets/css/_cix_boxlist.less", "assets/css/_cix_boxlist.css");
} catch (exception $e) {
    echo "_cix_boxlist: " . $e->getMessage();
}

try {
    $less->compileFile("assets/css/_cix_global.less");
    $less->checkedCompile("assets/css/_cix_global.less", "assets/css/_cix_global.css");
} catch (exception $e) {
    echo "_cix_global: " . $e->getMessage();
}

try {
    $less->compileFile("assets/css/_cix_detail.less");
    $less->checkedCompile("assets/css/_cix_detail.less", "assets/css/_cix_detail.css");
} catch (exception $e) {
    echo "_cix_detail: " . $e->getMessage();
}
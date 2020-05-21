<?php

function autoload($clase) {
    include 'controllers/'.$clase.'.php';
}

spl_autoload_register("autoload");

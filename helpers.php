<?php
function dump(...$variables){
    echo '<pre>';
    var_dump(...$variables);
    echo '</pre>';
}
function dd(...$variables){
    dump(...$variables);
    die;
}

function view($viewName, $vars = []){
    extract($vars);
    include __DIR__ . "/views/$viewName.php";
}
<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}


function dump($variable){
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}


switch($_SERVER['REQUEST_URI']) {
    case '/': 
        $months = ['January', 'February', 'March'];
        $posts = [
            ['title' => 'post1', 'text' => 'some body 1'],
            ['title' => 'post2', 'text' => 'some body 2'],
            ['title' => 'post3', 'text' => 'some body 3'],
            ['title' => 'post4', 'text' => 'some body 4'],
        ];
        include __DIR__ . '/../views/index.php';
        break;
    case '/us':
        $months = ['January', 'February', 'March'];
        $posts = [
            ['title' => 'post5', 'text' => 'some body 5'],
            ['title' => 'post6', 'text' => 'some body 6'],
            ['title' => 'post7', 'text' => 'some body 7'],
            ['title' => 'post8', 'text' => 'some body 8'],
        ];
        include __DIR__ . '/../views/us.php';
        break;
    default: 
        echo 404;
        break;
}
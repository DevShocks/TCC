<?php
function load() {
    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);

    $page = (!$page) ? 'pages/login.php' : "pages/{$page}.php";

    if(!file_exists($page)) {
        throw new \Exception("opa alguma coisa errada aconteceu");
    }
    return $page;

}
?>
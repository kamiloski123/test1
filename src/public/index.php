<?php

require_once '../vendor/autoload.php';

use Module\Framework\Routing;
use Module\Framework\Routes;

$route = new Routing();

Routes::add_route('POST', 'asd', function() {return 'test';});
Routes::add_route('GET','test1', function() {return 'To jest test 1 ';});
Routes::add_route('GET','test2', function() {return 'a to test 2';});
Routes::add_route('GET','test3', function() {return 'Hej Kamil!';});

$route->init();

//var_dump($_SERVER['REQUEST_METHOD']);

?>
<form method="POST" >
    <input type="submit" name="asd" value="asdasd"/>
</form>

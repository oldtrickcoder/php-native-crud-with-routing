<?php



require_once __DIR__.'/router.php';

get('/','views/index');
get('/create','views/Create');
get('/home','views/home');
post('/createUser','/controller/CreateController');

any('/404','views/404');


echo "oke";


?>
<?php
$app->get('/devices', function(){
    $str = file_get_contents('../app/data/mock.json');
    return $str;
});
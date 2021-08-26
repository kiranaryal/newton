<?php
$botman = app('botman');


$botman->hears('foo',function($bot){
$bot->reply('bar');
});

$botman->hears('hi',function($bot){
$bot->reply('hello');
});

?>
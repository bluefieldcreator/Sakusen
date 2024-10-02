<?php
require $_SERVER['DOCUMENT_ROOT'].'/struct/Auth.php';
require $_SERVER['DOCUMENT_ROOT'].'/struct/Views.php';
View::head();

$Sakusen->component('post', [
    'title'=>'epic gaming',
    'imageUrl'=>'nosex',
    'poster' => 'your mom'
], false);
?>

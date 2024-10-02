<?php

require_once("struct/router.php");

get('/auth/authenticate', 'Controllers/Auth/login.php');

?>
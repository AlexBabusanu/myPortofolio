<?php

require("core/router.php");
$router = Router::load("routes.php");

$projects = require("projects.php");


require($router->test(trim($_SERVER["REQUEST_URI"], "/")));
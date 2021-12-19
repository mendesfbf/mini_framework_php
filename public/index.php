<?php

require_once('../vendor/autoload.php');

use app\controller\TesteController;

$controller = new TesteController();
new \app\core\RouterCore();


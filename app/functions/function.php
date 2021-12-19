<?php
/**
 * função para realizar testes
 * 
 * toda vez que for tetar alguma coisa usar assim
 * 
 * require_once('../app/functions/functions.php');
 */

function dd($parans = [], $die = true)

{
    echo '<pre>';
    print_r($parans);
    echo '</pre>';

    if ($die) die();
}
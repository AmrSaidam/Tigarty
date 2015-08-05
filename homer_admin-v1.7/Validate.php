<?php

/**
 * Created by PhpStorm.
 * User: P.Amr Saidam
 * Date: 8/2/2015
 * Time: 5:48 PM
 */
class Validate
{
    function Validate_Pass()
    {
        if(strcmp($_POST['Pass'],$_POST['RePass']) != 0 ) {
            echo ' oninvalid="setCustomValidity("Erorr")" aria-required="false" ';
            echo 'Amr';
            die();

        }
        return 'Amr SAida';
    }
}

<?php

    $dbhost = 'localhost';
    $dbuser='root';
    $dbpass='';
    $dbname='signup_form';


if(!$con =mysqli_connect($dbhost , $dbuser, $dbpass, $dbname) )
{
    die("failed to connect!");
}
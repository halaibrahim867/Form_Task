<?php

$databases=[
    $dbhost = 'localhost',
    $dbuser='root',
    $dbpass='',
    $dbname='signup_form'
];

if(!$con =mysqli_connect($databases[]) )
{
    die("failed to connect!");
}
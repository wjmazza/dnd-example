<?php

session_start();

// We need to use sessions, so you should always start sessions using the below code.
$DATABASE_HOST = 'aa1r3vx5tyutlo3.ctns8zlbhhqu.us-east-2.rds.amazonaws.com';
$DATABASE_USER = 'admin';
$DATABASE_PASS = 'Kutztown!';
$DATABASE_NAME = 'ebdb';

// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if ( mysqli_connect_errno() ) {
  // If there is an error with the connection, stop the script and display the error.
  exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

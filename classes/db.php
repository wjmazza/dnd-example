<?php

require_once('./character.php');

class Database {

  private $DATABASE_HOST = 'aa1r3vx5tyutlo3.ctns8zlbhhqu.us-east-2.rds.amazonaws.com';
  private $DATABASE_USER = 'admin';
  private $DATABASE_PASS = 'Kutztown!';
  private $DATABASE_NAME = 'ebdb';

  private $connection;

  function __constrcut() {
    // Try and connect using the info above.
    $this['connection'] = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

    if ( mysqli_connect_errno() ) {
      // If there is an error with the connection, stop the script and display the error.
      exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

  }

  function getCharactersForPlayer($playerID) {

    $result = $self->connection->query('SELECT * FROM Characters WHERE playerId = ' . $playerId);

    if ($result) {

      $characters = array();

      while ( $characterData = $connection -> fetch_assoc() ) {

        $character = new Character($characterData);

        array_push($characters, $character);

      }

      return $characters;

    }
    else {

      exit 'Database query failed';

    }

  }

}

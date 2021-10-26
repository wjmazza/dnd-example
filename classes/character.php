<?php
require_once('db.php');

// stritcly defined object in PHP that exposes attributes and functions
class Character {

  public $Chname = "";
  public $lvlE = "";
  public $Hit = "";
  public $Throws = "3";
  public $Initiative = "4";
  public $Speed = "";
  public $Inspir = "";
  public $PB = "";
  public $PW = "";
  public $FT = "";
  public $Prof = "";
  public $WEAP = "";
  public $Arm = "";
  public $Trinkets = "";
  public $Acrobatics = "";
  public $animalHandling = "";
  public $Arcana = "";
  public $Athletics = "";
  public $Deception = "";
  public $History = "";
  public $Insight = "";
  public $Intimidation = "";
  public $Investigation = "";
  public $Medicine = "";
  public $Nature = "";
  public $Perception = "";
  public $Persuation = "";
  public $Religion = "";
  public $Sleightofhand = "";
  public $stealth = "";
  public $Survival = "";
  public $Strength = "";
  public $Dexterity = "";
  public $Constitution = "";
  public $Intelligence = "";
  public $Wisdom = "";
  public $Charisma = "";

  private $db;

  function __constrcut($characterData) {

    $db = new Database();

    foreach ( $characterData as $key => $value ) {

      $this[$key] = $value;

    }

  }

  function get($playerID) {

    $this -> db -> query ('SELECT FROM Characters WHERE AccountId = ' . $playerId);
    $result = $connection -> execute();

    if ($result) {

      while ($result = $connection -> fetch_assoc()){

      	foreach($characterColumns as $key => $value) {

          $this[$key] => $value;

        }

      }

      return $this;

    }
    else {

      return 'Error retrieving characrter data';

    }


  }

  function update($characterData) {

    $columnNames = implode(',', array_keys($this));
    $columnVales = implode(',', array_values($this));

    $this -> db -> query("INSERT INTO Characters $columnNames values ($columnValues)");

    $result = $this -> db -> execute();

    if ($result) {

      foreach ($characterData as $key => $value) {

        $this[$key] = $value;

      }

      return $this;

    }
    else {

      return "error updating database";

    }

  }


}

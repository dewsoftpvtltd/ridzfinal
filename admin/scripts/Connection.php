<?php

class Connection{
  public static function connect(){
    return mysqli_connect('127.0.0.1', 'homestead',  'secret', 'ridz');
  }
}


function e($connection,$string){
  return mysqli_real_escape_string($connection,$string);
}

<?php

class Connection{
  public static function connect(){
    return mysqli_connect('127.0.0.1', 'homestead',  'secret', 'ridz');
  }
}


function e($connection,$string){
  return mysqli_real_escape_string($connection,$string);
}


class Session{
  public static function put($name, $value){
    return $_SESSION[$name] = $value;
  }
  public static function exists($name){
    if(isset($_SESSION[$name])){
      return true;
    }
    return false;
  }
   public static function delete($name){
     if(self::exists($name)){
       unset($_SESSION[$name]);
     }
    }

    public static function get($name){
      if(self::exists($name)){
        return $_SESSION[$name];
      }
     }
     public static function has($name){
       if(self::exists($name)){
         return true;
       }
      }
    public static function flash($name, $value = ''){
      if(self::exists($name)){
        $session = self::get($name);
        self::delete($name);
        return $session;
      }else{
        self::put($name, $value);
      }
      return '';
    }
}

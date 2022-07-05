<?php 
namespace App;

class Autoload{

    public static function register(){
      spl_autoload_register(array(__CLASS__,'mon_autoload'));
    }

    public static function  mon_autoload($class){

      if(strpos($class,__NAMESPACE__.'\\')==0){
        
        $class = str_replace(__NAMESPACE__,'',$class);
        $class=str_replace('\\','/',$class);
        require __DIR__. $class .'.php';
      }
     
  }


}
<?php

include '../library/Session.php' ;
Session::init();
ob_start();

include '../library/Database.php' ;
include '../helpers/Format.php';

spl_autoload_register(function($class){
  include_once "../classes/".$class.".php";

});

 $user = new Account();
 $fm   = new Format();
?>

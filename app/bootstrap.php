<?php
//Load Conifg

require_once "config/config.php";

//load libraries



// require_once "libraries/Controller.php";
// require_once "libraries/Core.php";
// require_once "libraries/Database.php";

spl_autoload_register("classLoader");

function classLoader($className){
    
    require_once "libraries/" . $className . ".php";

}

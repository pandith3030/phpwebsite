<?php 


//database details
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','technosmarter');

$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//set timezone- Asia Kolkata 
date_default_timezone_set('Asia/Kolkata');

function my_autoloader($class) {
    include 'C:\xampp\htdocs\blog\classes\class.user.php';
}

spl_autoload_register('my_autoloader');

// Or, using an anonymous function as of PHP 5.3.0


//load classes as needed
 spl_autoload_register(function ($class) {
   
   $class = strtolower($class);

    //if call from within assets adjust the path
   $classpath = 'classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
    }   
    
    //if call from within admin adjust the path
   $classpath = '../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
    }
    
    //if call from within admin adjust the path
   $classpath = '../../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
    }       
     
});

$user = new User($db); 

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fun Times In London</title>
    </head>
    <body>

        <?php
        //connection to Database
    require_once('connection.php');
   
        
    //$_GET is Associative array. Isset checks whether an array ($_GET) has a key value 
    if (isset($_GET['controller']) && isset($_GET['action'])) {
        $controller = $_GET['controller'];
        $action     = $_GET['action'];
        
    //Default values for user landinf on page for first time
  } else {
        $controller = NULL;
        $action     = NULL;
  }
if ($controller == null && $action == null) {
    require_once('Landing.php');
}
  else {
    require_once('views/layout.php');
  }
        ?>
    </body>
</html>

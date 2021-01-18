<!-- Cookie trong php -->
<!DOCTYPE html>
  
<?php
    setcookie('username', 'thehalfheart', time() + 3600);
   
    if (isset($_COOKIE['username']))
    {
        echo $_COOKIE['username'];   
    }
    
?>
  
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
    </body>
</html>

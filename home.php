<html>

  <head>
  
    <title> test </title>
  
  </head>
  
  <body>
    <?php
      $read = file('content.txt');
      foreach ($read as $line) {
        echo $line;
      }
    ?>
  </body>

</html>


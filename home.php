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
  /*
    <?php
      $fp = fopen("content.txt","r");
      if ( $fi = file("datei.txt") )
      {
        foreach ( $fi as $ftemp => $row ) 
        {
          echo "Zeile $ftemp: $row<br>";
        }
      } else { 
        echo "Datei nicht gefunden";
      }
    ?>
  */
  </body>

</html>


<html>
  <body>
    The input says: <?php echo $_POST["input"]; ?> <br>
    <?php
      $input = $_POST["input"];
      $command = ".\ConsoleApplication1.exe $input";
      exec($command, $op); 
    ?>
  </body>
</html>
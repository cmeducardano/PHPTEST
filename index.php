<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello World</p>'; 
    try {
      $dsn = "mysql:host=den1.mysql2.gear.host ; dbname=php7";
      $PDOconn= new PDO($dsn,"db5biteacher","Iu2m-lCa!9RL");
      $PDOconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
      echo $e->getMessage();
    }
    ?> 
  </body>
</html>
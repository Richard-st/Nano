<!DOCTYPE html>
<html>
  <head>
  </head>

  <body>
    <?php
       //Connecting to Redis server on localhost
       $redis = new Redis();
       $redis->connect('redisProd01', 6379);

       $redis->set($_GET["key"], $_GET["value"] );

    ?>
  </body>
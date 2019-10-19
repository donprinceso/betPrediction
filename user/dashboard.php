<?php
  session_start();
  include '../functions.php';
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--This the site title-->
    <title><?php echo page_title("Dashboard"); ?></title>

    <!-- css stylesheet-->
    <link rel="stylesheet" type="text/css" href="../res/bootstrap.css"/> 
    <link rel="stylesheet" href="../user/app.css"/>
   
  </head>
  <body>
    <?php include './layout.php';?>
    <div class="main">
      
    </div>
    <script>
      function toggelSidebar(){
        document.getElementById("navside").classList.toggle('inactive')
      }
    </script>
  </body>
</html>

<html>
    <head>
        <title>
</title>
</head>
<body>
    <div class="container">
        <div class="item">
            <?php
              include "utility.php";

echo "ULTIME CIRCOLARI <br>";
   
$result=circolariSede("Roma");
$rows=$result->fetch_all(MYSQLI_ASSOC);

  foreach ($rows as $row){
      print ($row['meta_value']);
      if (strlen($row['post_title'])>60 ){
          $testo=substr($row['post_title'],0, 60)." ...";
      }
      else {
          $testo=$row['post_title'];
      }
      print ("  " . $testo );  
      print ("<br>");
  }
            ?>
</div>
<div class="item">
    <?php
    print "<br>";
    echo "ULTIME Notizie ROMA";
    print "<br>";
    $result=notizieSede("Roma");
    $rows=$result->fetch_all(MYSQLI_ASSOC);
    
    foreach ($rows as $row){
   
        if (strlen($row['post_title'])>60 ){
            $testo=substr($row['post_title'],0, 100)." ...";
        }
        else {
            $testo=$row['post_title'];
        }
        print (  $testo );  
        print ("<br>");
    }
    ?>
</div>

</div>

</body>
</html>


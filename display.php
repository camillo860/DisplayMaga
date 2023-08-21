<html>
    <head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">   
    <title> ISISS  MAGAROTTO - DISPLAY
</title>
</head>
<body>
    <div class="page">
        <div class="header"> 
            <div class="logo"> LOGO
            </div>
            <div class="bold">
                ISISS MAGAROTTO
            </div>
        </div>

 <?php
  include "utility.php";
  
  echo "ULTIME CIRCOLARI <br>";
   
  $result=circolariSede("Roma");
  $rows=$result->fetch_all(MYSQLI_ASSOC);
  
    foreach ($rows as $row){
        print ($row['meta_value']);
        if (strlen($row['post_title'])>60 ){
            $testo=substr($row['post_title'],0, 600)." ...";
        }
        else {
            $testo=$row['post_title'];
        }
        print ("  " . $testo );  
        print ("<br>");
    }
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
  
  print "<br>";
  echo "ULTIME Notizie NAZIONALE";
  print "<br>";
  $result=notizieSede("Nazionale");
  $rows=$result->fetch_all(MYSQLI_ASSOC);
  
  foreach ($rows as $row){
 
      if (strlen($row['post_title'])>60 ){
          $testo=substr($row['post_title'],0, 60)." ...";
      }
      else {
          $testo=$row['post_title'];
      }
      print ( "<span class=\"light\">". $testo. "</span>" );  
      print ("<br>");
  }
  
 
  $result =selectAvvisi();
  if(isset($result)){
   // echo "\n[1]". $result[1]."\n";
    $testo=$result[1];
  }
  echo "<hr>";
  echo $testo;

 ?></div>
</body>

</html>

<html>
    <head><title> ISISS  MAGAROTTO
</title>
</head>
<body>
 <?php
  include "utility.php";
  echo "CIRCOLARI";
  $result=circolariSede("Roma");
  print $result;
  print "<br>";
  echo "Notizie ROMA";

  $result=notizieSede("Roma");
  print $result;
  
  print "<br>";
  echo "Notizie NAZIONALE";

  $result=notizieSede("Nazionale");
  print $result;
 ?>
</body>

</html>

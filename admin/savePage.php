<?php
 $testoAvvisi='';
 $psw='';
if (isset($_POST['testoAvvisi']))  {
    $testoAvvisi=$_POST['testoAvvisi'];
   
}

else {
    $testoAvvisi="ERROR";
}

echo $testoAvvisi;
include "../utility.php";
saveAvvisi($testoAvvisi);
?>
<html>
    <body>
       <div id=page >
<div class="avvisoAdmin">
<H3> Salvataggio avvenuto con successo, <a href="adminPage.php?refresh=true&&session=<?php echo rand(0,1000000)  ?>;">clicca qui per tornare indietro</a> </h3>
</div>

</div>
</html>

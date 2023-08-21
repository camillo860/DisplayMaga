<html>
    <head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
        <link rel="stylesheet" href="css/styleAdmin.css">
        <script src="javascript/function.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>

        <title> Admin Page 
</title>
</head>
<body>
    <div class="page">
    <h1> INSERIRE LE SOSTITUZIONI e/o AVVISI</h1>
    <?php include("../utility.php");
      $testo="PROVA <br><p>8.00</p><p>9.00</p><p>10.00</p><p>11.00</p><p>12.00</p><p>13.00</p><p>14.00</p>";
      $result =selectAvvisi();
      if(isset($result)){
       // echo "\n[1]". $result[1]."\n";
        $testo=$result[1];
      }
   
     ?>

    <form action="savePage.php" id="myForm"  method="post" >
<div>
    <textarea id="editor" name="testoAvvisi" rows="10" cols="50">
  
  <?php echo $testo; ?>
 </textarea>
</div><br><br>
&nbsp;
&nbsp;
&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Salva">

</form>
<button onclick="resetTestoSupplenze2()">Cancella testo</button>

<script>

let editor;

 ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( newEditor => {
        editor = newEditor;
    } )
        .catch( error => {
            console.error( error );
        } );
       

 function resetTestoSupplenze2(){
   
    editor.setData("<p>8.00</p><p>9.00</p><p>10.00</p><p>11.00</p><p>12.00</p><p>13.00</p><p>14.00</p><p>15.00</p>");
    }
</script>
</div>
    </body>
</html>

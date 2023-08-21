<?php

include "config.php";
//include "class-phpass.php";

function notizieSede($sede){
   
    $mysqli=connectToDatabase();
    switch ($sede){
        case "Roma": $sede ="notizieRoma";
                     break;
        case "Nazionale": $sede="notizieNazionale";
                        break;
        case  "Torino": $sede ="notizieTorino";
                    break;
        case "Silvestri": $sede ="notizieSilvestri";
                    break;
        case "Fabriani": $sede = "notizieFabriani";
                    break;
        default: $sede ="notizieRoma";

    }
    $result = $mysqli->query("SELECT * FROM ".$sede);
    $mysqli->close();
    return $result;
   
}

function circolariSede($sede){
  
    $mysqli=connectToDatabase();
    switch ($sede){
        case "Roma": $sede ="circolariRoma";
                     break;
   
        case  "Torino": $sede ="circolariTorino";
                    break;
        case "Silvestri": $sede ="circolariSilvestri";
                    break;
        case "Fabriani": $sede = "circolariFabriani";
                    break;
        default: $sede ="circolariRoma";

    }
    $result = $mysqli->query("SELECT * FROM ". $sede ." limit 5 ");
    $mysqli->close();
    return $result;
}
function selectAvvisi(){
    $mysqli=connectToDatabase();
    $result = $mysqli->query("SELECT * FROM  displayAvvisi order by ID DESC limit 1");
    if ($result) {
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
        $result= $row ;
        }
     $mysqli->close();        
    return $result;
}
function saveAvvisi($testo){
    $resultValue=0;
    $mysqli=connectToDatabase();
    $query="INSERT INTO displayAvvisi (testo,userID) VALUES(\"$testo\",1)";
    $result= $mysqli->query($query);

    if (!$result) {
        $resultValue =1;
        printf("Errormessage: %s\n", $mysqli->error);
        }
    $mysqli->close();
    return $result;
}

function logout(){
    unset($_SESSION['counter']);
    session_destroy();
}
function checkSession(){
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        echo "Welcome to the member's area, " . htmlspecialchars($_SESSION['user_id']) . "!";
    } else {
        echo "Please log in first to see this page.";
    }
    }

function loginCheck($user, $psw){
    $usr=mysqli_real_escape_string($usr);
    $psw=mysqli_real_escape_string($psw);
   /* $wp_hasher = new PasswordHash( 8, true );
    echo "PASS: ";
    echo $wp_hasher->HashPassword( trim( $psw ) );
    echo "<br><br>";
    $psw=md5($psw);*/
    echo "PASS MD5 ".$psw;
    $resultValue=0;
    $mysqli=connectToDatabase();
    $query="SELECT ID,user_nicename from wp_users where user_login LIKE \"$user\" && user_pass LIKE \"$psw\"";
    echo $query;

    if (!$result) {
        $resultValue =1;
        printf("Errormessage: %s\n", $mysqli->error);
        }
        else {
            $row = mysqli_fetch_array($result, MYSQLI_NUM);
            $result= $row;
            echo $row['ID'];
            echo $row['user_nicename']; 
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id']=$row['ID'];
            $_SESSION['user_nicename']=$row['user_nicename'];

        }

    $mysqli->close();
    return $result;


}
?>
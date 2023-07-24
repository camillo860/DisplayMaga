<?php

include "config.php";

function connectToDatabase(){
    $mysqli = new mysqli($ipDabase, $username, $password,$dbName);

// Check connection
    if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
    }
    echo "Connected successfully";  

    return $mysqli;

}

function notizieSede($mysqli,$sede){
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
    $result = $mysqli->query("SELECT * FROM ". $sede);
    return $result;
}
function circolariSede($mysqli,$sede){
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
    $result = $mysqli->query("SELECT * FROM ". $sede);
    return $result;
}
function selectAvvisi($mysqli){
    $result = $mysqli->query("SELECT * FROM  displayAvvisi order by ID DESC limit 1");
    return $result;
}
function saveAvvisi($testo){
    $mysqli=connectToDatabase();
    $result= $mysqli->query('INSERT INTO displayAvvisi (testo,userID) VALUES($testo,1)');
    return $result;
}
/*
function login ($username,$password){
    $mysqli=connectToDatabase();
    $result= $mysqli->query('SELECT ');
    return $result;
}*/
?>

<?php
$mysqli = new mysqli("localhost","login","Pw(0A*WdWROaWckv","Termine");

$name=$_GET['name'];
$datum=$_GET['datum'];
$note=$_GET['note'];
$modul=$_GET['modul'];
$note = str_replace( "_", " ", $note);
$modul = str_replace( "_", " ", $modul);
$name = str_replace( "_", " ", $name);
echo ("SELECT * FROM termine WHERE name = $name AND modul = $modul");


$sql = $mysqli ->query ("SELECT * FROM termine WHERE name = '$name' AND modul = '$modul'");
    $row = $sql->fetch_assoc();
    $rows = $sql -> num_rows;
    if($rows > 0){
        
    }
    else{
        $sql = $mysqli ->query ("INSERT INTO `termine`(name, datum, note, modul) VALUES ('$name', '$datum', '$note', '$modul');");
    }





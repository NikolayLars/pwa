<?php
$mysqli = new mysqli("localhost","login","Pw(0A*WdWROaWckv","Termine");

$name=$_GET['name'];
$datum=$_GET['datum'];
$note=$_GET['note'];
$modul=$_GET['modul'];
$note = str_replace( "_", " ", $note);
$modul = str_replace( "_", " ", $modul);
$name = str_replace( "_", " ", $name);

$sql = $mysqli ->query ("INSERT INTO `termine`(name, datum, note, modul) VALUES ('$name', '$datum', '$note', '$modul');");


<?php
$mysqli = new mysqli("localhost","login","Pw(0A*WdWROaWckv","Termine");

$sql = $mysqli ->query ("SELECT * FROM termine");

$result = mysqli_fetch_all($sql,MYSQLI_ASSOC);
echo json_encode($result);
<?php

$mysqli = new mysqli("localhost","login","Pw(0A*WdWROaWckv","Termine");

$delete = $_GET['id'];
delete($delete);



function delete($delete){
    $sql = $GLOBALS['mysqli'] ->query ("DELETE FROM termine WHERE id = $delete");
}
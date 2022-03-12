<?php
$conn = new mysqli("localhost", "root", "", "FitnessClub");
if(!$conn){
    echo "database couldn't connect";
}
?>
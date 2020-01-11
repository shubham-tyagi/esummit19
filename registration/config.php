<?php

// godaddy server

 $servername = "localhost";
 $username = "edcbvucoepDB";
 $password = "Edcbvucoe@1234";
 $db = "esummit";

////localhost server
//
//$servername = "localhost";
//$username = "root";
//$password = "";
//$db = "recruit";

// Create connection
$conn = new mysqli($servername, $username, $password ,$db);

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";


?>
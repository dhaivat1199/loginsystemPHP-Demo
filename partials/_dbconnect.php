<?php

$servername = "localhost";
$username = "root";
$password = "";
$databases = "users";

$conn = mysqli_connect($servername, $username, $password, $databases);

// Die if the connection fails

if ($conn){

        // echo "Connection succeeded";

}

else {

    die ("Error" . mysqli_connect_error());
    
}

?>
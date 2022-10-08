<?php
// PHP requires a connection to a database, in order to do this, we look at writing a connection script, this will look like the following

// Connection Variables, the below variables are blank and is only an example on how you could create a connect file:
$servername = "";
$username = "";
$password = "";
$dbname = "";

// This will be used to connect to our database, we will use this through-out our system
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Checking for connection - You do not need to else part in final code:
if (!$conn) {
    echo ("You are not connected" . mysqli_connect_errno());
} else {
    echo ("You are connected");
}

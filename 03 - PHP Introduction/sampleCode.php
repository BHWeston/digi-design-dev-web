<?php
// Variables uset the $ symbol
$username = "Barry";
$age = 94;

// PHP will associate the data entered to the appropriate data type (similar to Python)

if(2 > 5) { // This will return back False, as 2 is not greater than 5 
    
    // Echo will display content onto the webpage, in this case the below will not be displayed because 2 is not greater than 5 
    
    echo("2 is greater than 5");
} else {

    // die() will stop the page from running any additional scripts when it is hit

    die("2 is not greater than 5, do not run anymore script");
}

// This should not be displayed on the screen, as the die() has been hit.
echo ("This will not be displayed");
?>
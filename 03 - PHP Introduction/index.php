<!DOCTYPE html>
<html lang="en">

<!-- We can use HTML code within PHP -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP File</title>
    <?php
    // This will run the connection script that we have created
    require("scripts/connect.php");
    ?>
</head>

<body>
    <p>This will still run on the website</p>
</body>

</html>
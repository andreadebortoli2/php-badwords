<?php

var_dump($_GET["text"]);

$paragraph= $_GET["text"];
$paragraph_length= strlen($_GET["text"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords-2nd-part</title>
</head>
<body>
    <h4>Text:</h4>
    <p>
        <?php echo $paragraph ?>
    </p>
    <h4>Length:</h4>
    <div>
        <?php echo $paragraph_length ?>
    </div>
</body>
</html>
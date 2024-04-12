<?php

// var_dump($_GET["text"]);

$paragraph = $_GET["text"];
$paragraph_length = strlen($_GET["text"]);

$bad_word = $_GET["bad_word"];

$text_censored = str_ireplace($bad_word, "***", $paragraph);
// var_dump($text_censored);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords-2nd-part</title>
    <style>
        .wrapper {
            width: 50%;
            margin: 1rem;
        }
    </style>
</head>
<body>
    <div class="wrapper">

        <h4>Text:</h4>
        <p>
            <?php echo $paragraph ?>
        </p>
        <h4>Length:</h4>
        <div>
            <?php echo $paragraph_length ?>
        </div>
        <h4>Censored text:</h4>
        <p>
            <?php echo $text_censored ?>
        </p>
        <h4>Length:</h4>
        <div>
            <?php echo strlen($text_censored) ?>
        </div>
    </div>
    </body>
</html>
<?php 
    $paragraph_length = $_GET["text"];
    $bad_word = $_GET["word"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censored</title>
</head>
<body>

<section>

    <h2>Inserted Paragraph</h2>
    <?php
        echo "$paragraph_length";
    ?>
    <br>
    <h3>Length: <?php
        echo strlen("$paragraph_length");
    ?> chars</h3>
    
</section>

<section>

    <h2> We have hidden the word from the paragraph</h2>
    <?php
        $bad_word = strtolower("$bad_word");
        $paragraph_length = str_replace("$bad_word" , " *** ", $paragraph_length);
        echo "$paragraph_length";
    ?>
</section>


</body>
</html>
<?php 
    $long_text = $_GET["text"];
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
        echo "$long_text";
    ?>
    <br>
    <h3>Length: <?php
        echo strlen("$long_text");
    ?> chars</h3>
    
</section>

<section>

    <h2> We have hidden the word from the paragraph</h2>
    <?php
        $bad_word = strtolower("$bad_word");
        $long_text = str_replace("$bad_word" , " *** ", $long_text);
        echo "$long_text";
    ?>
</section>


</body>
</html>
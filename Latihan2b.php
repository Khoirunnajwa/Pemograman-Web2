<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Latihan 2b </title>
    <style>
        .boxed-letter {
            background-color: lightgray;
            padding: 10px;
            border: 2px solid black;
            display: inline-block;
            margin-right: 5px;
            margin-bottom: 10px;
            
        }
        .outbox{    
            padding: 10px;
            margin: 10px;
            width: 15%;
        }
    </style>
</head>
<body>
<div class="outbox"> 
    <?php
    for ($i=1 ; $i <= 5; $i++) {
        for ($j=1; $j <= $i; $j++) {
            echo "<div class='boxed-letter'>" . $j . "</div>";
        }
        echo "<br>"; 
    }
    ?>
</div>
</body>
</html>

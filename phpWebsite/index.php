<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php multi-pages website</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li> <a href="contact">Contact</a></li>
        </ul>
    </nav>
    
    <?php

        var_dump($_SERVER["REQUEST_URI"]); // En savoir plus : https://www.php.net/manual/fr/reserved.variables.server.php
        
        // Router
        if($_SERVER["REQUEST_URI"] == "/"){
            include 'home.html';
        }else if($_SERVER["REQUEST_URI"] == "/contact"){
            include 'contact.html';
        }else{
            include '404.html';
        };

    ?>
</body>
</html>
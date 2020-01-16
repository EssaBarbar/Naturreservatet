<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        </head>
        
        <body>
        <form action="./result.php" method="POST">
        <input type="number" name="monckeysNR" placeholder="Number of monckeys" min="1" max="5" style="width: 14em;">
        <input type="number" name="giraffesNR" placeholder="Number of giraffes" min="1" max="5" style="width: 14em;">
        <input type="number" name="tigersNR" placeholder="Number of Tigers" min="1" max="5" style="width: 14em;">
        <input type="number" name="coconutsNR" placeholder="Number of Coconuts" min="1" max="5" style="width: 14em;">
        <button type="submit">Skapa</button>
        <?php
        $_SESSION["monckeys"] = "monckeysNR";
        $_SESSION["giraffes"] = "giraffesNR";
        $_SESSION["tigers"] = "tigersNR";
        $_SESSION["coconuts"] = "coconutsNR";
        
        ?>
    </form>
</body>

</html>
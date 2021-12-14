<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="">
             <input type="number" min="1" max="10" name="guess">
             <input type="submit">
        </form>
        <?php
        // put your code here
        
        
        function javitas($generaltszam,$guessszam){
            if($generaltszam==$guessszam){
                echo 'kitalaltad';
               
            }
            if($generaltszam<$guessszam)                echo 'nagyobb szam kell';
            if($generaltszam>$guessszam)                echo 'kissebb szam kell';
        }
        session_start();
        
         if (isset($_SESSION['szam'])) {
        javitas($_POST['guess'], $_SESSION['szam']);
    } else {
        $_SESSION['szam'] = rand(1, 10);
        javitas($_POST['guess'], $_SESSION['szam']);
    }
        ?>
    </body>
</html>

<?php
    //Include Class 
        require 'class/user.php';
    //
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Document</title>
    </head>
    
    <body>
        <h1> coucou </h1>

        <?php
            // Create some new User Object
                $user1 = new user('Audric', 'password', 'weasel', "");
                $user2 = new user('Xavier', 'password', 'Crow', "");
                $user3 = new user('Ronald', 'password', 'Raccon', "");
                $user4 = new user('Eric', 'password', 'Buffalo ', "");
            //
            
            // Methode to change User Info
                //$user1 -> setNom('user');
                //$user1 -> setLogin('user_San');
                //$user1 -> setPass('Password');
                //$user1 -> setBday(); // Ne peut etre vide
            //

            // Dump Users
                echo "user Dump";
                var_dump($user1);
                var_dump($user2);
                var_dump($user3);
                var_dump($user4);
            //

            // Methode to show User Info
                //echo "User Value 1/1" . "<br>";
                //echo $user1 -> getNom() . "<br>";
                //echo $user1 -> getLogin() . "<br>";
                //echo $user1 -> getPass() . "<br>";
                //echo $user1 -> getBday() . "<br>";
            //
        ?>
    </body>
</html>
<?php
    //Include Class 
        require 'class/user.php';
        require 'function/function.php';
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
            $uniqId = uniqid("user_");
            var_dump($uniqId);

            $n = RandomString(5);
            $p = RandomString(10);
            $l = RandomString(3);
            $bd = RandomDate();
            $pay = RandomBool();
            $sta = $uniqId;

            $uniqId = new user($n, $p, $l, $bd, $pay, $sta);
            $newUser = $uniqId;

            var_dump($newUser);
            
            /*
            var_dump(RandomBool());
            var_dump(RandomString(10));
            var_dump(RandomDate());
            var_dump(uniqid());
            */
        ?>
    </body>
</html>
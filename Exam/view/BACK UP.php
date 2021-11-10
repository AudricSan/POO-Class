<?php

require('../model/class/form.php');

var_dump($_POST);

$form = new Form($_POST);
$form2 = new Form($_POST);

$data = [
    ['FirstName', 'text', 'FirstName'],
    ['LastName', 'text', 'LastName'],
    ['Adresse', 'text', 'Adresse'],
    ['Madame', 'radio', 'civilité'],
    ['Monsieux', 'radio', 'civilité'],
    ['Celibataire', 'radio', 'eta'],
    ['Marié·e', 'radio', 'eta']
];

$data2 = [
    ['Boisson', 'text', 'Boisson'],
    ['Plat', 'text', 'Plat'],
    ['Dessert', 'text', 'Dessert'],
    ['A Emporter', 'radio', 'conso'],
    ['Sur place', 'radio', 'conso'],
    ['Sauce', 'checkbox', 'Sauce'],
    ['Salade', 'checkbox', 'Salade']
];

$submit = 'valider';

$titreUser = ['Information Personel', 'Civilité', 'Etat Civil'];
$titreMenu = ['Menu', 'Choix Consomation', 'A Rajouter'];
?>

<h2>Identification abonée</h2>
    <fieldset>
        <form action="" method="post">
        <h3>Information Personel</h3>
            <?php
            // echo $form->input('FirstName', 'text', 'FirstName');
            echo $form->getForms($data);
            echo $form->submit($submit);

            ?>
        </form>
    </fieldset>
    
<h2>Selection Menu</h2>
    <fieldset>
        <form action="" method="post">
        <h3>Information Personel</h3>
            <?php
            // echo $form->input('FirstName', 'text', 'FirstName');
            echo $form2->getForms($data2);
            echo $form->submit($submit);

            ?>
        </form>
    </fieldset>

<h2>--------------------------- AUTRE METHODE ---------------------------</h2>
    
<h2>Identification abonée</h2>
<fieldset>
    <form action="" method="post">
        <?php
        echo "<h3>" . $titreUser[0] . "</h3>";
        echo $form->input('FirstName', 'text', 'FirstName');
        echo $form->input('LastName', 'text', 'LastName');
        echo $form->input('Adresse', 'text', 'Adresse');

        echo "<h3>" . $titreUser[1] . "</h3>";
        echo $form->input('Madame', 'radio', 'civilité');
        echo $form->input('Monsieux', 'radio', 'civilité');

        echo "<h3>" . $titreUser[2] . "</h3>";
        echo $form->input('Celibataire', 'radio', 'eta');
        echo $form->input('Marié·e', 'radio', 'eta');

        echo $form->submit('Valider');
        ?>
    </form>
</fieldset>

<h2>Sélection menu</h2>
<fieldset>
    <form action="" method="post">
    <h3>Choix du menu</h3>
        <?php
        echo "<h3>" . $titreMenu[0] . "</h3>";
        echo $form2->input('Boisson', 'text', 'Boisson');
        echo $form2->input('Plat', 'text', 'Plat');
        echo $form2->input('Dessert', 'text', 'Dessert');

        echo "<h3>" . $titreMenu[1] . "</h3>";
        echo $form2->input('A Emporter', 'radio', 'conso');
        echo $form2->input('Sur place', 'radio', 'conso');

        echo "<h3>" . $titreMenu[2] . "</h3>";
        echo $form2->input('Sauce', 'checkbox', 'Sauce');
        echo $form2->input('Salade', 'checkbox', 'Salade');

        echo $form2->submit('Valider');
        ?>
    </form>
</fieldset> 
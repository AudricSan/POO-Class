<?php

// Require the Class Form => Class WITH Interface
require('../model/class/form.php');

// Create 2 child from Form Class and give POST Value for default value.
$form = new Form($_POST);
$form2 = new Form($_POST);

// Set Value for User info Input
$dataUser = [
    ['FirstName', 'text', 'FirstName'],
    ['LastName', 'text', 'LastName'],
    ['Adresse', 'text', 'Adresse']
];

// Set Value for User Civil Input
$dataCivil = [
    ['Madame', 'radio', 'civilité'],
    ['Monsieux', 'radio', 'civilité']
];

// Set Value for User etat Input
$dataEtat = [
    ['Celibataire', 'radio', 'eta'],
    ['Marié·e', 'radio', 'eta']
];

// Set Value for Menu info Input
$dataMenu = [
    ['Boisson', 'text', 'Boisson'],
    ['Plat', 'text', 'Plat'],
    ['Dessert', 'text', 'Dessert']
];

// Set Value for Menu Consomation Input
$dataConso = [
    ['A Emporter', 'radio', 'conso'],
    ['Sur place', 'radio', 'conso']
];

// Set Value for Menu Ajout Input
$dataAjou =[
    ['Sauce', 'checkbox', 'Sauce'],
    ['Salade', 'checkbox', 'Salade']
];

// Set Value for Title in forms
$titreUser = ['Information Personel', 'Civilité', 'Etat Civil'];
$titreMenu = ['Menu', 'Choix Consomation', 'A Rajouter'];

// Set Submit text
$submit = 'valider';

?>

<h2>Identification abonée</h2>
    <fieldset>
        <form action="" method="post">
            <?php
            // Set title 0 for User
            echo "<h3>" . $titreUser[0] . "</h3>";
            // Create input for User Info
            echo $form->getForms($dataUser);

            // Set Title 1 for User
            echo "<h3>" . $titreUser[1] . "</h3>";
            // Create input for User Civil info
            echo $form->getForms($dataCivil);

            // set Title 2 for User
            echo "<h3>" . $titreUser[2] . "</h3>";
            // Create input for User Etat Info
            echo $form->getForms($dataEtat);

            // Create Submit button with submit variable value
            echo $form->submit($submit);
            ?>
        </form>
    </fieldset>
    
<h2>Selection Menu</h2>
    <fieldset>
        <form action="" method="post">
            <?php
            // set Title 2 for User
            echo "<h3>" . $titreMenu[0] . "</h3>";
            // Create input for Menu Info
            echo $form2->getForms($dataMenu);

            // set Title 2 for User
            echo "<h3>" . $titreMenu[1] . "</h3>";
            // Create input for Menu Consomation Info
            echo $form2->getForms($dataConso);

            // set Title 2 for User
            echo "<h3>" . $titreMenu[2] . "</h3>";
            // Create input for Menu Ajout Info
            echo $form2->getForms($dataAjou);

            // Create Submit button with submit variable value
            echo $form2->submit($submit);
            ?>
        </form>
    </fieldset>
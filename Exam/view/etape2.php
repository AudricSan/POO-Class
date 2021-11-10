<?php

require('../model/class/form.php');

var_dump($_POST);

$form = new Form($_POST);
$form2 = new Form($_POST);

$dataUser = [
    ['FirstName', 'text', 'FirstName'],
    ['LastName', 'text', 'LastName'],
    ['Adresse', 'text', 'Adresse']
];

$dataCivil = [
    ['Madame', 'radio', 'civilité'],
    ['Monsieux', 'radio', 'civilité']
];

$dataEtat = [
    ['Celibataire', 'radio', 'eta'],
    ['Marié·e', 'radio', 'eta']
];

$dataMenu = [
    ['Boisson', 'text', 'Boisson'],
    ['Plat', 'text', 'Plat'],
    ['Dessert', 'text', 'Dessert']
];

$dataConso = [
    ['A Emporter', 'radio', 'conso'],
    ['Sur place', 'radio', 'conso']
];

$dataAjou =[
    ['Sauce', 'checkbox', 'Sauce'],
    ['Salade', 'checkbox', 'Salade']
];

$titreUser = ['Information Personel', 'Civilité', 'Etat Civil'];
$titreMenu = ['Menu', 'Choix Consomation', 'A Rajouter'];

$submit = 'valider';

?>

<h2>Identification abonée</h2>
    <fieldset>
        <form action="" method="post">
            <?php
            echo "<h3>" . $titreUser[0] . "</h3>";
            echo $form->getForms($dataUser);

            echo "<h3>" . $titreUser[1] . "</h3>";
            echo $form->getForms($dataCivil);

            echo "<h3>" . $titreUser[2] . "</h3>";
            echo $form->getForms($dataEtat);

            echo $form->submit($submit);
            ?>
        </form>
    </fieldset>
    
<h2>Selection Menu</h2>
    <fieldset>
        <form action="" method="post">
            <?php
            echo "<h3>" . $titreMenu[0] . "</h3>";
            echo $form->getForms($dataMenu);

            echo "<h3>" . $titreMenu[1] . "</h3>";
            echo $form->getForms($dataConso);

            echo "<h3>" . $titreMenu[2] . "</h3>";
            echo $form->getForms($dataAjou);

            echo $form->submit($submit);
            ?>
        </form>
    </fieldset>
<?php

require ('../model/class/form.php');

var_dump($_POST);

$form = new Form($_POST);
$form2 = new Form($_POST);

?>

<h2>Identification abonée</h2>
<fieldset>
    <form action="" method="post">
    <h3>Information Personel</h3>
        <?php
            echo $form -> input('FirstName', 'text', 'FirstName');
            echo $form -> input('LastName', 'text', 'LastName');
            echo $form -> input('Adresse', 'text', 'Adresse');
        ?>
        <h3>Civilité</h3>
        <?php
            echo $form -> input('Madame', 'radio', 'civilité');
            echo $form -> input('Monsieux', 'radio', 'civilité');
        ?>
        <h3>Etat civil</h3>
        <?php 
            echo $form -> input('Celibataire', 'radio', 'eta');
            echo $form -> input('Marié·e', 'radio', 'eta');

            echo $form -> submit('Valider');
        ?>
    </form>
</fieldset>

<h2>Sélection menu</h2>
<fieldset>
    <form action="" method="post">
    <h3>Choix du menu</h3>
        <?php
            echo $form2 -> input('Boisson', 'text', 'Boisson');
            echo $form2 -> input('Plat', 'text', 'Plat');
            echo $form2 -> input('Dessert', 'text', 'Dessert');
            ?>
            <h3>Choix consommation</h3>
            <?php        
            echo $form2 -> input('A Emporter', 'radio', 'conso');
            echo $form2 -> input('Sur place', 'radio', 'conso');
            ?>
            <h3>A rajouter</h3>
            <?php 
            echo $form2 -> input('Sauce', 'checkbox', 'Sauce');
            echo $form2 -> input('Salade', 'checkbox', 'Salade');

            echo $form2 -> submit('Valider');
        ?>
    </form>
</fieldset>
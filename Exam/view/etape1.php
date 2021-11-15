<?php

// Require the Class Form0 => CLass without Interface
require('../model/class/form0.php');

// Create 2 child from Form Class and give POST Value for default value.
$form = new Form($_POST);
$form2 = new Form($_POST);

// Set Submit text
$submit = 'valider';
?>
   
<h2>Identification abonée</h2>
<fieldset>
    <form action="" method="post">
    <h3>Information Personel</h3>
        <?php
        // Create Input from Forms child 1 for User Info
        echo $form->input('FirstName', 'text', 'FirstName');
        echo $form->input('LastName', 'text', 'LastName');
        echo $form->input('Adresse', 'text', 'Adresse');

        // Create Button for Submit Forms child 1
        echo $form->submit($submit);
        ?>
    </form>
</fieldset>

<h2>Sélection menu</h2>
<fieldset>
    <form action="" method="post">
    <h3>Choix du menu</h3> 
        <?php
        // Create Input from Forms child 2 for Menu Info
        echo $form2->input('Boisson', 'text', 'Boisson');
        echo $form2->input('Plat', 'text', 'Plat');
        echo $form2->input('Dessert', 'text', 'Dessert');

        // Create Button for Submit Forms child 2
        echo $form->submit($submit);
        ?>
    </form>
</fieldset> 
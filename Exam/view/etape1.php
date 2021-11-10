<?php

require('../model/class/form0.php');

var_dump($_POST);

$form = new Form($_POST);
$form2 = new Form($_POST);

$submit = 'valider';
?>
   
<h2>Identification abonée</h2>
<fieldset>
    <form action="" method="post">
    <h3>Information Personel</h3>
        <?php
        echo $form->input('FirstName', 'text', 'FirstName');
        echo $form->input('LastName', 'text', 'LastName');
        echo $form->input('Adresse', 'text', 'Adresse');

        echo $form->submit('valider');
        ?>
    </form>
</fieldset>

<h2>Sélection menu</h2>
<fieldset>
    <form action="" method="post">
    <h3>Choix du menu</h3>
        <?php
        echo $form2->input('Boisson', 'text', 'Boisson');
        echo $form2->input('Plat', 'text', 'Plat');
        echo $form2->input('Dessert', 'text', 'Dessert');

        echo $form->submit('valider');
        ?>
    </form>
</fieldset> 
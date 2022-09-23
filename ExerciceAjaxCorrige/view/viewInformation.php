<?php $titre = 'Informations';?>

<?php ob_start();?>

<div class="container mt-3">
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col"></th>
                <!-- ... -->
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($informations as $information) {?>
            <tr>
                <td><?php echo $information->donnee; ?></td>
                <!-- ... -->
                <td><i class="fa-solid fa-delete-left"></i></td>
                <!-- <td>Icone de suppression de Font Awesome<td> -->
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>

<script src="./javascript/information.js"></script>

<?php $contenu = ob_get_clean();?>

<?php require 'template.php';?>
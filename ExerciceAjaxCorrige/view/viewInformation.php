<?php $titre = 'Informations';?>

<?php ob_start();?>

<div class="container mt-3">
    <table class="table mt-3">
    <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Email</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td>Default</td>
                <td>Defaultson</td>
                <td>def@somemail.com</td>
            </tr>      
            <tr class="table-primary">
                <td></td>
                <td>Primary</td>
                <td>Joe</td>
                <td>joe@example.com</td>
            </tr>
            <tr class="table-success">
                <td></td>
                <td>Success</td>
                <td>Doe</td>
                <td>john@example.com</td>
            </tr>
            <tr class="table-danger">
                <td></td>
                <td>Danger</td>
                <td>Moe</td>
                <td>mary@example.com</td>
            </tr>
            <tr class="table-info">
                <td></td>
                <td>Info</td>
                <td>Dooley</td>
                <td>july@example.com</td>
            </tr>
            <tr class="table-warning">
                <td></td>
                <td>Warning</td>
                <td>Refs</td>
                <td>bo@example.com</td>
            </tr>
            <tr class="table-active">
                <td></td>
                <td>Active</td>
                <td>Activeson</td>
                <td>act@example.com</td>
            </tr>
            <tr class="table-secondary">
                <td></td>
                <td>Secondary</td>
                <td>Secondson</td>
                <td>sec@example.com</td>
            </tr>
            <tr class="table-light">
                <td></td>
                <td>Light</td>
                <td>Angie</td>
                <td>angie@example.com</td>
            </tr>
            <tr class="table-dark">
                <td></td>
                <td>Dark</td>
                <td>Bo</td>
                <td>bo@example.com</td>
            </tr>
        </tbody>
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
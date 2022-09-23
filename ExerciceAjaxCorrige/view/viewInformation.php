<?php $titre = 'Informations';?>

<?php ob_start();?>

<div class="container mt-3">
    <table class="table mt-3">
    <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Nom :</th>
                <th scope="col">Origine :</th>
                <th scope="col">Email</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-primary">
                <td></td>
                <td>Chipolatas</td>
                <td>Defaultson</td>
                <td>def@somemail.com</td>
            </tr>      
            <tr class="table-success">
                <td></td>
                <td>Chipolatas aux herbes</td>
                <td>Joe</td>
                <td>joe@example.com</td>
            </tr>
            <tr class="table-danger">
                <td></td>
                <td>Chorizo à griller</td>
                <td>Doe</td>
                <td>john@example.com</td>
            </tr>
            <tr class="table-warning">
                <td></td>
                <td>Crépinette</td>
                <td>Moe</td>
                <td>mary@example.com</td>
            </tr>
            <tr class="table-primary">
                <td></td>
                <td>Merguez</td>
                <td>Activeson</td>
                <td>act@example.com</td>
            </tr>
            <tr class="table-success">
                <td></td>
                <td>Soubressade piquante</td>
                <td>Secondson</td>
                <td>sec@example.com</td>
            </tr>
            <tr class="table-danger">
                <td></td>
                <td>Saucisse au couteau</td>
                <td>Angie</td>
                <td>angie@example.com</td>
            </tr>
            <tr class="table-warning">
                <td></td>
                <td>Saucisse au piment d'Espelette</td>
                <td>Bo</td>
                <td>bo@example.com</td>
            </tr>
            <tr class="table-primary">
                <td></td>
                <td>Saucisse campagnarde</td>
                <td>Bo</td>
                <td>bo@example.com</td>
            </tr>
            <tr class="table-success">
                <td></td>
                <td>Saucisse de canard</td>
                <td>Bo</td>
                <td>bo@example.com</td>
            </tr>
            <tr class="table-danger">
                <td></td>
                <td>Saucisse de Toulouse</td>
                <td>Bo</td>
                <td>bo@example.com</td>
            </tr>
            <tr class="table-warning">
                <td></td>
                <td>Saucisse échalote</td>
                <td>Bo</td>
                <td>bo@example.com</td>
            </tr>
            <tr class="table-primary">
                <td></td>
                <td>Saucisse méditerranéenne</td>
                <td>Bo</td>
                <td>bo@example.com</td>
            </tr>
            <tr class="table-success">
                <td></td>
                <td>Saucisse T'chorizette</td>
                <td>Bo</td>
                <td>bo@example.com</td>
            </tr>
        </tbody>
        <tbody scope="col" >
            <?php foreach ($informations as $information) {?>
            <tr scope="col">
                <td><?php echo $information->donnee; ?></td>
                <!-- ... -->
                <td ><i class="fa-solid fa-delete-left"></i></td>
                <!-- <td>Icone de suppression de Font Awesome<td> -->
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>

<script src="./javascript/information.js"></script>

<?php $contenu = ob_get_clean();?>

<?php require 'template.php';?>
<section>
    <h1>Annuaire Client <button>Ajouter client</button></h1>

    <table id="table_client" class="display">
        <thead>
            <tr>
                <th>Code client</th>
                <th>Raison sociale</th>
                <th>Civilite</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Actions</th>
            </tr>
        </thead>
    <tbody>
    <?php 

        while($clients = $data->fetch())
        {
            echo '<tr>';
                echo '<td>' . $clients['code_client'] . '</td>';
                echo '<td>' . $clients['raison_sociale'] . '</td>';
                echo '<td>' . $clients['libelle'] . '</td>';
                echo '<td>' . $clients['nom'] . '</td>';
                echo '<td>' . $clients['prenom'] . '</td>';

                echo '<td><a href="#"><img src="./assets/pencil.png" class="imageTableau" title="Modifier Profil client" alt="bouton_modifier"/></a>
                   <a href="#"><img src="./assets/cancel.png" class="imageTableau" title="Supprimer Profil client" alt="bouton_supprimer"/></a>
                </td>';
            echo '</tr>';
        }
        Database::disconnect();
    ?>
        </tbody>
    </table>

</section>
<script type="text/javascript"  src="includes/scripts/jquery-3.3.1.min.js"></script>
<script type="text/javascript"  src="includes/scripts/datatables.js"></script>

<script type="text/javascript">
    $(document).ready( function () {
        $('#table_client').DataTable();
        } );
</script>


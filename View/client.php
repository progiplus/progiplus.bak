  <section>

	<h1>Annuaire Client</h1>
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

                echo '<td><a href="#"><img src="View/assets/pencil.png" class="imageTableau" title="Modifier Profil client" alt="bouton_modifier"/></a>
                   <a href="#"><img src="View/assets/cancel.png" class="imageTableau" title="Supprimer Profil client" alt="bouton_supprimer"/></a>
                </td>';
            echo '</tr>';
        }
        Database::disconnect();
    ?>
        </tbody>
    </table>
</section>
    <script type="text/javascript"  src="View/includes/scripts/jquery-3.3.1.min.js"></script>
    <script type="text/javascript"  src="View/includes/scripts/datatables.js"></script>
    
    <script type="text/javascript">
		function init()
		{
			$('#table_client').DataTable( {"language": getLangageDataTable("client", true)} );
		}
		
		window.onload = init;
    </script>


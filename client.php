<!DOCTYPE html>

<head>
	<link rel="stylesheet" type="text/css" href="includes/style/style.css" >
<<<<<<< HEAD
    <link rel="stylesheet" type="text/css" href="includes/style/datatables.css" >
    
=======
	<link rel="stylesheet" type="text/css" href="includes/style/datatables.css">
>>>>>>> elodie
	<title> Progiplus-client</title>
	</head>
<nav>

</nav>


<body>
    <?php include('./nav.php'); ?>
	<h1>Annuaire Client</h1>

	<!-- version vanilla <table >

		<tr>
			<th>Code client</th>
			<th>raison sociale</th>
			<th>Nom contact</th>
			<th>prenom de contact</th>
			<th>service de contact</th>
			<th>moyenn de communication</th>
			<th>Actions</th>

			</tr>
			<td>---</td>
			<td>---</td>
			<td>---</td>
			<td>---</td>
			<td>---</td>
			<td>---</td>
			<td><a href="***"><img src="./assets/pencil.png" title="Modifier Profil client" alt="bouton_modifier" height="20"/></a>
               <a href="***"><img src="./assets/cancel.png" title="Supprimer Profil client" alt="bouton_supprimer" height="20"/></a></td>
		</td>
	</table> -->



	<table id="table_client" class="display">
        <thead>
	        <tr>
				<th>Code client</th>
				<th>Raison sociale</th>
				<th>Nom contact</th>
				<th>Prénom de contact</th>
				<th>Service de contact</th>
				<th>Moyen de communication</th>
				<th>Actions</th>
                </thead>
			</tr>
<<<<<<< HEAD
    <tbody>
			<?php 
=======
			<?php
>>>>>>> elodie
			for($row = 0; $row < 15; $row ++ )
			{
				echo '<tr>';
						for($col = 0; $col < 6; $col ++ )
						{
							echo '<td>col</td>';
						}

				echo '
				<td><a href="***"><img src="./assets/pencil.png" title="Modifier Profil client" alt="bouton_modifier" height="20"/></a>
					<a href="***"><img src="./assets/cancel.png" title="Supprimer Profil client" alt="bouton_supprimer" height="20"/></a></td>
				</td>

				</tr>';
            }
        
           
			
			?>
        </tbody>

</table>
    <script type="text/javascript"  src="includes/scripts/jquery-3.3.1.min.js"></script>
    <script type="text/javascript"  src="includes/scripts/datatables.js"></script>

    <script type="text/javascript">
     $(document).ready( function () {
            $('#table_client').DataTable();
            } );
  

    </script>

    
    
</body>

<footer></footer>

</html>

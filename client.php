<!DOCTYPE html>

<head>
	<link rel="stylesheet" type="text/css" href="includes/style/style.css" >
	<title> Progiplus-client</title>
	</head>
<nav>
	
</nav>


<body>
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



	<table>

	        <tr>
				<th>Code client</th>
				<th>raison sociale</th>
				<th>Nom contact</th>
				<th>prenom de contact</th>
				<th>service de contact</th>
				<th>moyenn de communication</th>
				<th>Actions</th>
			</tr>
			<?php 
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

</table>

</body>

<footer></footer>

</html>




















<!DOCTYPE html>
<html>
<head>
<title>Annuaire Produits</title>
<link rel="stylesheet" href="includes/style/style.css">
<link rel="stylesheet" type="text/css" href="includes/datatables.css">
<meta charset="UTF-8">
</head>

<body>

<h1>Liste des Produits</h1>

<table id="table_clients" class="display">
  <thead>
    <tr>
      <th>Désignation</th>
      <th>Référence</th>
      <th>Prix unitaire</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>---</td>
      <td>---</td>
      <td>---</td>
      <td><a href="***"><img src="assets/pencil.png" title="Modifier Profil client" alt="bouton_modifier" height="20"/></a>
          <a href="***"><img src="assets/cancel.png" title="Supprimer Profil client" alt="bouton_supprimer" height="20"/></a></td>
    </tr>
    <tr>
      <td>---</td>
      <td>---</td>
      <td>---</td>
      <td><a href="***"><img src="assets/pencil.png" title="Modifier Profil client" alt="bouton_modifier" height="20"/></a>
          <a href="***"><img src="assets/cancel.png" title="Supprimer Profil client" alt="bouton_supprimer" height="20"/></a></td>
    </tr>
    <tr>
      <td>---</td>
      <td>---</td>
      <td>---</td>
      <td><a href="***"><img src="assets/pencil.png" title="Modifier Profil client" alt="bouton_modifier" height="20"/></a>
          <a href="***"><img src="assets/cancel.png" title="Supprimer Profil client" alt="bouton_supprimer" height="20"/></a></td>
    </tr>
  </tbody>
</table>

<script type="text/javascript" src="includes/jquery-3.3.1.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript">
$(document).ready( function () {
  $('#table_clients').DataTable();
} );
</script>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
<title>Annuaire Produits</title>
<link rel="stylesheet" type="text/css" href="includes/style/style.css">
<link rel="stylesheet" type="text/css" href="includes/style/datatables.css">
<meta charset="UTF-8">
</head>

<body>

<?php include('./nav.php'); ?>

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
      <td><img class="modal_modif" src="assets/pencil.png" title="Modifier Profil client" alt="bouton_modifier" height="20">
          <a href="#"><img src="assets/cancel.png" title="Supprimer Profil client" alt="bouton_supprimer" height="20"/></a></td>
    </tr>
    <tr>
      <td>---</td>
      <td>---</td>
      <td>---</td>
      <td><img class="modal_modif" src="assets/pencil.png" title="Modifier Profil client" alt="bouton_modifier" height="20">
          <a href="#"><img src="assets/cancel.png" title="Supprimer Profil client" alt="bouton_supprimer" height="20"/></a></td>
    </tr>
    <tr>
      <td>---</td>
      <td>---</td>
      <td>---</td>
      <td><img class="modal_modif" src="assets/pencil.png" title="Modifier Profil client" alt="bouton_modifier" height="20">
          <a href="#"><img src="assets/cancel.png" title="Supprimer Profil client" alt="bouton_supprimer" height="20"/></a></td>
    </tr>
  </tbody>
</table>

<div id="modal_modif_client" class="modal">
  <div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
    <h2>Modifier la Fiche produit</h2>
  </div>
    <div class="modal-body">
      <p>Some text in the Modal Body</p>
      <p>Some other text...</p>
    </div>
  </div>
</div>

<script type="text/javascript" src="includes/scripts/jquery-3.3.1.min.js"></script>

<script type="text/javascript">

  var modal = document.getElementById('modal_modif_client');
  var btn = document.getElementsByClassName("modal_modif");
  var span = document.getElementsByClassName("close")[0];
  for(i=0; i<btn.length; i++){
    btn[i].onclick = function() {
        modal.style.display = "block";
    }
  }

  span.onclick = function() {
      modal.style.display = "none";
  }

  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
}

</script>

<script type="text/javascript" src="includes/scripts/datatables.js"></script>
<script type="text/javascript">
$(document).ready( function () {
  $('#table_clients').DataTable();
} );
</script>

</body>
</html>

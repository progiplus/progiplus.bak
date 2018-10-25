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

<div id="modal_ajouter_produit" class="modal">
  <div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
    <h2>Ajouter un produit</h2>
  </div>
    <div class="modal-body">
      <form onsubmit="return foncverif()">
        <p><label for="libellé_produit">Libellé :</label>
        <input type="text" id="libellé_produit" name="libellé_produit"></p>

        <p><label for="marque_produit">Marque :</label>
        <select name="marque_produit" id="marque_produit">
          <option value="0" id="no">--</option>
          <option value="1" id="ok">Nouveau</option>
        </select></p>

        <p><label for="gamme_produit">Gamme :</label>
        <select name="gamme_produit" id="gamme_produit">
          <option value="0">--</option>
        </select></p>

        <p><label for="référence_produit">Référence :</label>
        <input type="text" id="référence_produit" name="référence_produit"></p>

        <p><label for="prixht_produit">Prix (HT) :</label>
        <input type="text" id="prixht_produit" name="prixht_produit"></p>

        <p><label for="tva_produit">TVA :</label>
        <select name="tva_produit" id="tva_produit">
          <option value="0">--</option>
        </select></p>

        <p><label for="quantité_produit">Quantité :</label>
        <input type="text" id="quantité_produit" name="quantité_produit"></p>

        <p>Actif :<br>
        <input type="checkbox" name="inactif" id="inactif" /> <label for="inactif">Inactif</label></p>

       <button type="button">Valider</button>
       <button type="button">Annuler</button>
    </div>
  </div>
</div>

<button id="bouton_ajouter" type="button">Ajouter un nouveau produit</button>

<div id="modal_modif_produit" class="modal">
  <div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
    <h2>Modifier la Fiche produit</h2>
  </div>
    <div class="modal-body">
      <p>Some text in the Modal Body</p>
      <p>Some other text...</p>
       <button type="button">Valider</button>
       <button type="button">Annuler</button>
    </div>
  </div>
</div>

<table id="table_produits" class="display">
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
      <td><img class="modal_modif" src="assets/pencil.png" title="Modifier Profil produit" alt="bouton_modifier" height="20">
          <a href="#"><img src="assets/cancel.png" title="Supprimer Profil produit" alt="bouton_supprimer" height="20"/></a></td>
    </tr>
    <tr>
      <td>---</td>
      <td>---</td>
      <td>---</td>
      <td><img class="modal_modif" src="assets/pencil.png" title="Modifier Profil produit" alt="bouton_modifier" height="20">
          <a href="#"><img src="assets/cancel.png" title="Supprimer Profil produit" alt="bouton_supprimer" height="20"/></a></td>
    </tr>
    <tr>
      <td>---</td>
      <td>---</td>
      <td>---</td>
      <td><img class="modal_modif" src="assets/pencil.png" title="Modifier Profil produit" alt="bouton_modifier" height="20">
          <a href="#"><img src="assets/cancel.png" title="Supprimer Profil produit" alt="bouton_supprimer" height="20"/></a></td>
    </tr>
  </tbody>
</table>

<script type="text/javascript" src="includes/scripts/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="includes/scripts/datatables.js"></script>

<script type="text/javascript">

var modal_modif = document.getElementById("modal_modif_produit");
var btn_modif = document.getElementsByClassName("modal_modif");
for(i=0; i<btn_modif.length; i++){
  btn_modif[i].onclick = function() {
    modal_modif.style.display = "block";
  }
}

var modal_ajout = document.getElementById("modal_ajouter_produit");
var btn_ajout = document.getElementById("bouton_ajouter");
btn_ajout.onclick = function() {
  modal_ajout.style.display = "block";
}

var span_ajout = document.getElementsByClassName("close")[0];
var span_modif = document.getElementsByClassName("close")[1];

span_ajout.onclick = function() {
  modal_ajout.style.display = "none";
}

span_modif.onclick = function() {
  modal_modif.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal_ajout.style.display = "none";
    modal_modif.style.display = "none";
  }
}

function foncAjoutMarque(){
  if (document.getElementById("marque_produit").checked) {
          document.getElementById("ok").style.display = "block";
      } else {
          document.getElementById("ok").style.display = "none";
      }
  }

$(document).ready( function () {
  $('#table_produits').DataTable();
} );

$('#table_produits').DataTable( {
    language: {
        processing:     "Traitement en cours...",
        search:         "Rechercher&nbsp;:",
        lengthMenu:    "Afficher _MENU_ &eacute;l&eacute;ments",
        info:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
        infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        infoPostFix:    "",
        loadingRecords: "Chargement en cours...",
        zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        emptyTable:     "Aucune donnée disponible dans le tableau",
        paginate: {
            first:      "Premier",
            previous:   "Pr&eacute;c&eacute;dent",
            next:       "Suivant",
            last:       "Dernier"
        },
        aria: {
            sortAscending:  ": activer pour trier la colonne par ordre croissant",
            sortDescending: ": activer pour trier la colonne par ordre décroissant"
        }
    }
} );

</script>

</body>
</html>

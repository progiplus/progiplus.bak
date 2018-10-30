<?php

require 'modales.php';

?>

<section>
<h1>Liste des Produits</h1>

<button id="bouton_ajouter" type="button">Ajouter un nouveau produit</button>

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
      <td><img class="modal_modif" src="View/assets/pencil.png" title="Modifier Profil produit" alt="bouton_modifier" height="20">
          <a href="#"><img src="View/assets/cancel.png" title="Supprimer Profil produit" alt="bouton_supprimer" height="20"/></a></td>
    </tr>
    <tr>
      <td>---</td>
      <td>---</td>
      <td>---</td>
      <td><img class="modal_modif" src="View/assets/pencil.png" title="Modifier Profil produit" alt="bouton_modifier" height="20">
          <a href="#"><img src="View/assets/cancel.png" title="Supprimer Profil produit" alt="bouton_supprimer" height="20"/></a></td>
    </tr>
    <tr>
      <td>---</td>
      <td>---</td>
      <td>---</td>
      <td><img class="modal_modif" src="View/assets/pencil.png" title="Modifier Profil produit" alt="bouton_modifier" height="20">
          <a href="#"><img src="View/assets/cancel.png" title="Supprimer Profil produit" alt="bouton_supprimer" height="20"/></a></td>
    </tr>
  </tbody>
</table>

<script type="text/javascript" src="View/includes/scripts/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="View/includes/scripts/datatables.js"></script>

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
  $('#table_produits').DataTable({"language": getLangageDataTable("produit", false)});
} );
</script>

</section>

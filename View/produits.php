<section>
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

        <p>Cocher cette case pour désactiver le produit :<br>
        <input type="checkbox" name="inactif" id="inactif" /> <label for="inactif"></label></p>

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

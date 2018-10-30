<!--Ajouter un produit-->

<div id="modal_ajouter_produit" class="modal">
  <div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
    <h2>Ajouter un produit</h2>
  </div>
  <div class="modal-body">
    <form>
      <p><label for="libellé_produit">Libellé :</label>
      <input type="text" id="libellé_produit" name="libellé_produit"></p>

      <p><label for="marqueProduit">Marque :</label>
      <select onchange="checkNewMarque" name="marqueProduit" id="marqueProduit">
        <option value="0">Sélectionnez</option>
        <option value="newP">Nouveau</option>
        <input type="text" id="newMarque" name="newMarque">
        <button type="button" id="validerNewMarque" name="validerNewMarque">Valider</button>
      </select></p>

      <p><label for="gammeProduit">Gamme :</label>
      <select onchange="checkNewGamme" name="gammeProduit" id="gammeProduit">
        <option value="0">Sélectionnez</option>
        <option value="newG">Nouveau</option>
        <input type="text" id="newGamme" name="newGamme">
        <button type="button" id="validerNewGamme" name="validerNewGamme">Valider</button>
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

<!--Modifier un produit-->

<div id="modal_modif_produit" class="modal">
  <div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
    <h2>Modifier la Fiche produit</h2>
  </div>
  <div class="modal-body">
    <form>
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

<script type="text/javascript">

var marqueProduit = document.getElementById('marqueProduit');
marqueProduit.onchange = checkNewMarque;
marqueProduit.onchange();

function checkNewMarque() {
    var marqueProduit = this;
    var newMarque = document.getElementById('newMarque');
    var validerNewMarque = document.getElementById('validerNewMarque');
    if (marqueProduit.options[marqueProduit.selectedIndex].value === 'newP') {
        newMarque.style.display = '';
        validerNewMarque.style.display = '';
    } else {
        newMarque.style.display = 'none';
        validerNewMarque.style.display = 'none';
    }
}

var marqueProduit = document.getElementById('marqueGamme');
gammeProduit.onchange = checkNewGamme;
gammeProduit.onchange();

function checkNewGamme() {
    var gammeProduit = this;
    var newGamme = document.getElementById('newGamme');
    var validerNewGamme = document.getElementById('validerNewGamme');
    if (gammeProduit.options[gammeProduit.selectedIndex].value === 'newG') {
        newGamme.style.display = '';
        validerNewGamme.style.display = '';
    } else {
        newGamme.style.display = 'none';
        validerNewGamme.style.display = 'none';
    }
}

</script>

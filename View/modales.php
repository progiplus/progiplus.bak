<!--Ajouter un produit-->

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

<!--Modifier un produit-->

<div id="modal_modif_produit" class="modal">
  <div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
    <h2>Modifier la Fiche produit</h2>
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

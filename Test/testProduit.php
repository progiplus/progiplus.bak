<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="../includes/style/style.css" >
    <script src="../includes/scripts/jquery-3.3.1.min.js"></script>
    <title> Progiplus-client</title>
</head>

<script>
    $.ajax({
        type: "POST",
        url: "../Controller/main.php?page=produit&action=ajouterMarque",
        data: { nomMarque : "marquetest"}
    }).done(function( msg ) {
        document.write( "Data Saved: " + msg );
    });
</script>

<?php

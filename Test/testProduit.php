<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="../View/includes/style/style.css" >
    <script src="../View/includes/scripts/jquery-3.3.1.min.js"></script>
    <title> Progiplus-client</title>
</head>

<script>
    $.ajax({
        type: "POST",
        url: "../Controller/main.php?page=produit&action=ajouterMarque",
        data: { nomMarque : "marquetest"}
    }).done(function( msg ) {
        document.write(msg);
    });
</script>
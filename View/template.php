<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="includes/style/style.css"/>
    <link rel="stylesheet" type="text/css" href="includes/style/datatables.css" >
</head>
<body>
    <div class="wrapper">
        <?php include('./nav.php'); ?>
        <?php include($chemin); // ajout d'un ou plusieurs fichier php ?>   
    </div>
    
</body>
</html>
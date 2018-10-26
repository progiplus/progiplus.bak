<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="View/includes/style/style.css"/>
    <link rel="icon" href="View/assets/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="View/includes/style/datatables.css" >
</head>
<body>
    <div class="wrapper">
        <?php include('View/nav.php'); ?>
        <?php include($chemin); // ajout d'un ou plusieurs fichier php ?>   
    </div>
    
</body>
</html>
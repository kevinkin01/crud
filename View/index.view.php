<?php
# aaa028 create homepage view
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-3">
<?php
include "View/menu.view.php";
if (isset($_GET["categ"])) {
    switch ($_GET["categ"]) {
        case 1:
            $x = "HTML5/CSS3";
            break;
        case 2:
            $x = "Javascript/Jquery";
            break;
        case 3:
            $x = "PHP/MySQL";
            break;
        case 4:
            $x = "Autres";
            break;

    }
echo "<center><h1>Catégorie: {$x}</h1></center>";
    
}
else {
  echo "<center><h1>Accueil</h1></center>";
  
}

if (!is_array($listView)) {
    echo "<h2><center>$listView</center></h2>";
} else {
    echo "<div class='row'>";
    foreach ($listView as $item) {
        ?>
        <div class="col-sm-4 p-2">
        <div id="boracc" class="m-1  border border-primary rounded p-3">
        <h3><a href="?detail=<?= $item->getIdarticle(); ?>"><?= $item->getThetitle(); ?></a></h3>
        <p><?= substr($item->getThetext(),0,150); ?></p>
        <p><?= $item->getThedate(); ?>
            Par <?php
            echo "<a href='?user={$item->getIdauthor()}'>{$item->getThename()}</a>";
            echo "<br><a href='?categ={$item->getIdcategory()}'>{$item->getThecategtitle()}</a>";
            ?></p>
        </div>
    </div>
        <?php
        }
    echo "</div>";
    }
?>
<footer><center>Copyright CF2M 2018</center></footer>
</div>
</body>
</html>

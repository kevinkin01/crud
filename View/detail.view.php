<?php
# aaa066 create detail view

if(is_string($oneView)){

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>: <?= $oneView ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-3">
<?php
    include "View/menu.view.php";
    echo "<center><h1>Article: {$oneView}</h1></center>";
}else{

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Article: <?= $oneView->getThetitle() ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-3">
<?php
include "View/menu.view.php";
?>
<center><h1>Article: <?= $oneView->getThetitle() ?></h1></center>
<div class="m-1  border border-success rounded p-3">
    <div>
        écrit par <b><?=$oneView->getTheName();?></b>, le <?= $oneView->getThedate();?> - <?= $oneView->getThecategtitle();?>
    </div>
        <p class="mt-2"><?= $oneView->getThetext() ?></p> 
        <?php } ?>
</div>
</div>
<footer><center>Copyright CF2M 2018</center></footer>
</div>
</body>
</html>

<?php
# aaa112 - update Article view form
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin - Modifier un article</title>
    <script src="Asset/js/myJs.min.js"></script>
    <link type="text/css" rel="stylesheet" href="Asset/css/jquery-ui.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<script src="Asset/js/jquery-ui.js"></script>

<script src="Asset/js/datepicker-fr.js"></script>


    <div class="container mt-3">
<?php
include "View/menu.view.php";
?>
<center><h1>Modifier un article</h1></center>
<?php
# aaa113 article doesn't exist
if(!$recup){
    echo "<h3>Cet article n'existe plus</h3>";
}else {

  switch ($recup2->getCategoryidcategory()) {
        case 1:
            $x1 = "checked";
            break;
        case 2:
            $x2 = "checked";
            break;
        case 3:
            $x3 = "checked";
            break;
        case 4:
            $x4 = "checked";
            break;

    }
?>


<form name="oneName2" action="" method="post">

<div class="form-group row">
    <label for="lthetitle" class="col-sm-2 col-form-label">Titre</label>
    <div class="col-sm-10">
      <input type="text" name="thetitle" class="form-control" id="lthetitle" placeholder="Entrez le titre de l'article" value="<?=$recup2->getThetitle()?>">
    </div>
</div>
<div class="form-group row">
    <label for="lthedate" class="col-sm-2 col-form-label">Date</label>
    <div class="col-sm-10">
      <input type="date" name="thedate" class="form-control" id="aujourdhui" value="<?= $recup2->getThedate() ?>">
    </div>
</div>
<div class="form-group row">
    <label for="lthetitle" class="col-sm-2 col-form-label">Catégorie</label>
    <div class="col-sm-10">
      <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="categoryidcategory" id="inlineRadio1" value="1" <?=@$x1;?>>
      <label class="form-check-label" for="inlineRadio1">HTML5/CSS3</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="categoryidcategory" id="inlineRadio2" value="2" <?=@$x2;?>>
      <label class="form-check-label" for="inlineRadio2">JavaScript/Jquery</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="categoryidcategory" id="inlineRadio3" value="3" <?=@$x3;?>>
      <label class="form-check-label" for="inlineRadio3">PHP/MySQL</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="categoryidcategory" id="inlineRadio4" value="4" <?=@$x4;?>>
      <label class="form-check-label" for="inlineRadio4">Autres</label>
    </div>
    </div>
</div>
<div class="form-group">
    <label for="exampleTextarea">Texte</label>
    <textarea class="form-control" name="thetext" id="exampleTextarea" rows="3"><?=$recup2->getThetext()?></textarea>
  </div>

<input type="hidden" name="idarticle" value="<?=$recup2->getIdarticle()?>">
<input type="hidden" name="Authoridauthor" value="<?=$recup2->getAuthoridauthor()?>">

<center><button type="submit" class="btn btn-success">Modifier l'article</button></center>
</form>
    <script type="text/javascript">
        $("#aujourdhui").datepicker( $.datepicker.regional[	"fr" ] );
    </script>

    <?php
}
?>
<footer><center>Copyright CF2M 2018</center></footer>
</div>
</body>
</html>

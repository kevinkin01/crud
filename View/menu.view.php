<?php
    //var_dump($_SESSION);
    if(isset($_GET["login"])){
        $plogin = "active";
    }
    if(isset($_GET["categ"])){
        $pcateg = "active";
    }
    elseif(empty($_GET) || isset($_GET["detail"])|| isset($_GET["user"])){
        $paccueil = "active";
    }
?>
<ul class="nav nav-pills d-flex">
    <?php
        if (isset($_SESSION['monid']) && $_SESSION['monid'] == session_id()) {
    ?>
    <li class="nav-item">
      <a class="nav-link" href="#">WebNew</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="./">Liste des articles</a>
    </li>
    <li class="nav-item ml-auto">
      <a class="p-2 ml-auto nav-link" href="?deconnect">Déconnexion</a>
    </li>
    <?php
        }else{
    ?>
    <li class="nav-item">
      <a class="nav-link" href="#">Webnew</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?=@$paccueil;?>" href="./">Accueil</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle <?=@$pcateg;?>" data-toggle="dropdown" href="#">Catégories</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="?categ=1">HTML5/CSS3</a>
        <a class="dropdown-item" href="?categ=2">Javascript/JQuery</a>
        <a class="dropdown-item" href="?categ=3">PHP/MySQL</a>
        <a class="dropdown-item" href="?categ=4">Autres</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="./">Tous les catalogues</a>

    </div>
    </li>
    <li class="nav-item ml-auto">
      <a class="p-2 ml-auto nav-link <?=@$plogin;?>" href="?login">Connexion</a>
    </li>
    <?php
        }
    ?>
  </ul>
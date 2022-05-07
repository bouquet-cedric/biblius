<?php 
    require_once($_SERVER["DOCUMENT_ROOT"]."/bibliothèque/utils/fonctions.php");
    $tmp=checkIsOk(array("titre"),array("create_film"=>""),"../");
    if ($tmp){
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblius - Création page</title>
    <link rel="stylesheet" href="/bibliothèque/style.css">
    <link rel="stylesheet" href="/bibliothèque/creation/creation.css">
</head>

<body>
    <?php 
        inc("menu.php");
    ?> 
    <form action="" method="POST" class="c_page">
        <div style="width:20%;height:100%;margin-left:18vmin;float:left;">
            <fieldset >
                <legend>Créer une page</legend>
                <?php addChamp("champ","titre","text","",true)?>
                <?php addChamp("champ","volume","number","Numéro du film")?>
                <?php addSelect("champ","etat",array("vu","en cours","à voir"),range(0,3),true)?>
                <input type="submit" name="sended" value="Enregistrer">
            </fieldset>
        </div>
    </form>
    <?php
        if (isset($_POST["sended"])){
            echo "<div style='position:absolute;top:0;right:0'>".$_POST["titre"]."<br>".$_POST["volume"]."<br>".$_POST["etat"]."</div>";
        }
    ?>
</body>

</html>
<?php
    }
?>
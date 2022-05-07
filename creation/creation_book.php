<?php 
    require_once($_SERVER["DOCUMENT_ROOT"]."/bibliothèque/utils/fonctions.php");

    $tmp=checkIsOk(array("auteur","titre"),array("create_book"=>""),"../"); # si auteur et titre sont dans le post ou que post(edit_film) = "" alors c'est bon
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
                <legend>Ajouter un livre</legend>
                <?php addChamp("champ","titre","text","",true)?>
                <?php addChamp("champ","auteur","text","",true)?>
                <input type="submit" value="Enregistrer">
            </fieldset>
        </div>
    </form>
    <?php
        if (isset($_POST["titre"]) && isset($_POST["auteur"])){
            echo "<div style='position:absolute;top:0;right:0'>".$_POST["titre"]."<br>".$_POST["auteur"]."</div>";
        }
    ?>
</body>

</html>
<?php 
    }
?>
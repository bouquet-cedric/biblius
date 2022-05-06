<?php require_once($_SERVER["DOCUMENT_ROOT"]."/bibliothèque/utils/fonctions.php");?>
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
                <label for="titre">Titre du livre :</label>
                <input name="titre" id="titre" type="text" placeholder="titre">
                <input type="submit" value="Enregistrer">
            </fieldset>
        </div>
        <div style="width:calc( 80% - 18vmin );height:95vmin;margin-left:calc( 18vmin + 20% );">
            <textarea name="content" style="width: 100%;height: 100%;resize: none;" placeholder="Nouvelle page"></textarea>
        </div>
    </form>
    <?php
        if (isset($_POST["titre"]) && isset($_POST["content"])){
            // $content=explode("\n",$_POST["content"]);
            $content=str_replace("\n","<br>",$_POST["content"]);

            echo "<div style='position:absolute;top:0;right:0'>".$_POST["titre"]."<br>".$content."</div>";
        }
    ?>
</body>

</html>
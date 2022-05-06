<?php require_once($_SERVER["DOCUMENT_ROOT"]."/bibliothèque/utils/fonctions.php");?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bibliothèque/creation/creation.css">
    <link rel="stylesheet" href="/bibliothèque/scrollbar.css">

</head>
<body>
    
<span class="action_créa"></span>
<div class="infoBulles">
    <table>
        <tr>
            <?php
                addAction("creation/creation_book.php","POST","create book","Ajouter un livre");
                addAction("creation/creation_film.php","POST","create film","Ajouter un film");
                addAction("creation/creation_series.php","POST","create series","Ajouter une série");
            ?>
        </tr>
    </table>
</div>
</body>
</html>
<?php require_once($_SERVER["DOCUMENT_ROOT"]."/bibliothèque/utils/fonctions.php");?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bibliothèque/creation/creation.css">
</head>
<body>
    
<span>Édition</span>
<div class="infoBulles">
    <table>
        <tr>
            <?php
                addAction("edition/edition_book.php","POST","edit book","Editer un livre");
                addAction("edition/edition_film.php","POST","edit film","Editer un film");
                addAction("edition/edition_series.php","POST","edit serie","Editer une série");
            ?>
        </tr>
    </table>
</div>
</body>
</html>
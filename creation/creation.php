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
    
<span>Création</span>
<div class="infoBulles">
    <table>
        <tr>
            <?php
                addAction("creation/creation_book.php","POST","create_book");
                addAction("creation/creation_page.php","POST","create_page");
            ?>
        </tr>
    </table>
</div>
</body>
</html>
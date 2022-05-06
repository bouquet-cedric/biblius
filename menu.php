<?php require_once($_SERVER["DOCUMENT_ROOT"]."/bibliothèque/utils/fonctions.php");?>
<div class="menu_actions">
    <div class="title">
        <img src="/bibliothèque/images/logo/book.png" alt="" width="50" height="30"> 
        <form action="/bibliothèque/index.php" method="POST">
            <input type="submit" value="Biblius">
        </form>
    </div>
    <div class="action" >
        <?php 
            inc("creation/creation.php");
        ?>
    </div>
    <div class="action">
        <?php 
            inc("edition/edition.php");
        ?>
    </div>
    <div class="action">
    </div>
</div>

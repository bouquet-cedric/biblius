<?php
    function inc($filename){
        $path=$_SERVER["DOCUMENT_ROOT"]."/"."bibliothèque/".$filename;
        include($path); 
    }

    function addAction($action, $method, $class){
        echo "<td class='info_label $class'><form action='/bibliothèque/$action' method='$method'><input type='submit' value=''></form></td>";
    }
?>
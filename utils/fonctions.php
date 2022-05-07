<?php
    function inc($filename){
        $path=$_SERVER["DOCUMENT_ROOT"]."/"."bibliothèque/".$filename;
        include($path); 
    }

    function addAction($action, $method, $class,$desc){
        $namus=$class;
        echo "<td title='$desc' class='info_label $class'><form action='/bibliothèque/$action' method='$method'><input name='$namus' type='submit' value=''></form></td>";
    }

    function addChamp($class, $label,$type,$placeholder="",$require=false){
        if ($placeholder == null || $placeholder=="") $placeholder=$label;
        $champ=ucfirst(strtolower($label));
        $lblFor=str_replace(" ","_",$label);
        $req=$require?"required":"";
        $options="";
        if ($type == "number") $options=$options." min=0";
        echo "
        <div class='$class'>
        <label for='$lblFor'>$champ :</label>
        <input name='$lblFor' id='$lblFor' type='$type' placeholder='$placeholder' $options $req>
        </div>";
    }
    
    function addSelect($class,$label,$options,$values=null,$require=false){
        $lblFor=str_replace(" ","_",$label);
        $req=$require?"required":"";
        $champ=ucfirst(strtolower($label));
        echo "<div class='$class'>
        <label for='$lblFor'>$champ :</label>
        <select name='$lblFor' id='$lblFor' $req>";
        logger("$values");
        sleep(3);
        for($i=0;$i<count($options);$i++){
            $opt=$options[$i];
            if ($values != null) $val=$values[$i];
            else {
                $val=str_replace(" ","_",$opt);
                $val=strtolower($val);
            }
            echo "<option value='$val'>$opt</option>";
        }
        echo "</select>";
    }

    function logger($chaine){
        echo "<script>console.log(".$chaine.");</script>";
    }

    function checkIsOk($keys,$couples,$back){
        ob_start();
        $cpt=count($keys);
        $compteur=0;
        $cpt2=count($couples);
        $compteur2=0;
        foreach($_POST as $key => $val){
            foreach ($couples as $k => $v){
                if ($key == $k && $val == $v) $compteur2++;
            }
        }
        if ($cpt2 == $compteur2){
            return true;
        }
        foreach($_POST as $key => $val){
            for ($i=0;$i<$cpt;$i++){
                if ($key == $keys[$i]) $compteur++;
            }
        }
        if ($compteur == $cpt) return true;
        echo "<span style='color:white;background-color:red;'>Not Available !</span>";
        header("Refresh: 3;url='$back'");
        ob_flush();
        return false;
    }
    
    function getStringFromArray($arr){
        $res="";
        foreach ($arr as $k => $v){
            $res="".$res.$k." => ".$v."\\n";
        }
        return $res;
    }
?>
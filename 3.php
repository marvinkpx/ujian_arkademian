<?php
    function count_vowels($string){
        $kata = strtolower($string);
        $huruf = str_split($kata); 
        $count=0;
        for ($i=0;$i<sizeof($huruf);$i++){
        if ($huruf[$i]== "a" || $huruf[$i]== "i" || $huruf[$i]== "u" || $huruf[$i]==  "e"|| $huruf[$i] == "o"){
                $count++;
            }
        }
        echo $count;
    }
    count_vowels("Marvin Daniel Pekuwali");
?>
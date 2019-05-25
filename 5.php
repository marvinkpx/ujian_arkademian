<?php
    function ganti_kata($kata,$awal,$pengganti){
        $huruf = str_split($kata);
        for ($i=0;$i<sizeof($huruf);$i++){
            if($huruf[$i]==strtolower($awal)){
                $huruf[$i] = strtolower($pengganti);
            }
            else if($huruf[$i]==strtoupper($awal)){
                $huruf[$i] = strtoupper($pengganti);
            }
        }
        $hasil = implode("",$huruf);
        echo $hasil;
    }
    ganti_kata("Marvin Daniel Pekuwali", "a","b");
?>
<?php
    function cetak_gambar($angka){
        for ($i=0; $i<$angka; $i++){
            for ($j=0;$j<$angka;$j++){
                if(($angka%2)== 1 ){
                    if($i==0 || $i==$angka-1|| $j==floor($angka/2)){
                        echo "X ";
                    } else{
                        echo"= ";
                    }
                } else{
                    if($i==0 || $i==$angka-1|| $j==floor($angka/2)-1||$j==floor($angka/2)){
                        echo "X ";
                    } else{
                        echo"= ";
                    }
                }
            }
            echo"<br>";
        }
    }
    cetak_gambar(7);
?>
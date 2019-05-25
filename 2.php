<?php
    function betweenDays($awal,$akhir)
    {
        $hari = 60*60*24;
        $hariAwal = strtotime($awal); 
        $hariAkhir = strtotime($akhir); 
        $selisih = ($hariAkhir - $hariAwal)/$hari;
        for ($i=0;$i<=$selisih;$i++){
            $waktu = $hariAwal+($i*$hari);
            echo date("Y-m-d", $waktu)." ";
        }
    }
    betweenDays("1994-11-29","1995-01-03");
?>
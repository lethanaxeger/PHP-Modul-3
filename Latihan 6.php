<?php
    $tahun = date ("Y");
    $kabisat = ($tahun%4 == 0) ? "KABISAT" : "BIASA";
    echo "Tahun <b>$tahun</b> $kabisat";
?>
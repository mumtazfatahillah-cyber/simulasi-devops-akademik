
<?php

function validasiSKS($jumlahSKS) {
    $batasMaksimum = 24;

    if ($jumlahSKS <= $batasMaksimum) {
        return "KRS berhasil disimpan";
    }

    return "Jumlah SKS melebihi batas maksimum";
}

// Contoh pengujian
echo validasiSKS(24);

?>

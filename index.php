<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 25px;
        }

        td {
            padding: 4px;
            border: 1px solid;
        }

    </style>
</head>
<body>
    <h1>ARIESSA QASANDRA </h1>

    <?php
    $baju = 17;
    $bawa = 250;
    $hasil = $bawa;
    $harga = 0;
    $kira = 0;
    while($hasil >= $baju){
        $hasil = $hasil - $baju;
        $kira = $kira + 1;
        $harga = $harga + $baju;
    }
    ?>

    <p>
        Ariessa bawa RM<?php echo $bawa; ?>. 
        Sehelai baju bersamaan dengan RM<?php echo $baju; ?>.
        Jumlah baju yang saya dapat beli ialah <?php echo $kira; ?>.
        Jumlah harga keseluruhannya ialah <?php echo $harga; ?>. 
        Baki yang ada sekarang ialah <?php echo $hasil; ?>. 
</body>
</html>
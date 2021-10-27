<?php
    $Sembako=[
        [
            'No'=>1,
            'Barang1'=>"Timun",
            'Berat'=>2,
            'Stok'=>5,
        ],
        [
            'No'=>2,
            'Barang1'=>"Kentang",
            'Berat'=>3,
            'Stok'=>3,
        ],
        [
            'No'=>3,
            'Barang1'=>"Wortel",
            'Berat'=>5,
            'Stok'=>10,
        ],
        [
            'No'=>4,
            'Barang1'=>"Terong",
            'Berat'=>5,
            'Stok'=>7,
        ],
        [
            'No'=>5,
            'Barang1'=>"Jagung",
            'Berat'=>5,
            'Stok'=>10,
        ],
        [
            'No'=>6,
            'Barang1'=>"Cabe",
            'Berat'=>1,
            'Stok'=>0,
        ],
        [
            'No'=>7,
            'Barang1'=>"Bawang",
            'Berat'=>15,
            'Stok'=>10,
        ],
        [
            'No'=>8,
            'Barang1'=>"Tomat",
            'Berat'=>2,
            'Stok'=>0,
        ],
        [
            'No'=>9,
            'Barang1'=>"Bengkoang",
            'Berat'=>2,
            'Stok'=>4,
        ],
        [
            'No'=>10,
            'Barang1'=>"Jahe",
            'Berat'=>3,
            'Stok'=>31,
        ]

    ];
    $index=0
    ?>

<!DOCTYPE html>
<html>
<style>
     html{
         background-color: #EEE8AA;
         }
</style>

    <head> 
    <title>Warung Sayur Pak Joy</title>
    
</head>
    <style>
        html{
            font-family: Arial;
        }
    </style>
    <body>"
        <div class="Keranjang">
            <center><h1><font color="rgb(238, 232, 170)"> Konversi Berat Sayur Pak Joy</font></h1></center>
            <table cellpadding="5" cellspacing="0"
            border="4" align=center>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Berat(Kg)</th>
                    <th>Berat (Gram)</th>
                    <th>Berat (Miligram)</th>
                    <th>Stok</th>
                </tr>
                <style>
                    th{
                        background-color: #BC8F8F;
                    }
                    </style>
            </thread>
        <tbody>
            <?php
            foreach($Sembako as $Barang)
        {$index +-1?>
                <tr>
                    <?-$index?>
                    <td><center><?=$Barang['No']?></center></td>
                    <td><center><?=$Barang['Barang1']?></center></td>
                    <td><center><?=$Barang['Berat']?></center></td>
                    <td><center><?=$Barang['Berat']*1000?></center></td>
                    <td><center><?=$Barang['Berat']*1000000?></center><td>
                    <class="<?= $Barang['Stok'] == 0 ? 'null' : '' ?>"><?= $Barang ['Stok'] == 0 ? 
                    'kosong': $Barang ['Stok'] ?>
                    <style>
                       td{
                           background-color: #FFDAB9;
                       }
                       </style>
                 </tr>
                <?php
        }?>
            </table>
        </div>
    </body>
</html>
<?php $siswa=[
    ["nama" => "Anwar" , "alamat" =>"paten" , "kota"=>"magelang", "foto" => "sapi.jpeg"],
    ["nama" =>"Lalu" , "alamat"=>"Kanan" , "kota" => "magelang", "foto" => "bebek.jpeg"]
    ]; ?>

<?php foreach( $siswa as $s){ ?>
    <!-- <li><?php echo "$s" ?></li><br>-->
    <li><img src="gambar/<?php echo $s['foto']?>"> </li><br>
    <li><?php echo $s['nama'] ?></li><br> 
    <li><?php echo $s['alamat'] ?></li><br>
    <li><?php echo $s['kota'] ?></li><br>
<?php } ?>
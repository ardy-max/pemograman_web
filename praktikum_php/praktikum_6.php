<?php
    echo "halo\n";

    $nim = "12345678";
    $nama = "budi";

    echo "NIM : " . $nim;
    echo "nama : ". $nama;  
    
    ?>



<?php

define(constant_name: "NAMA", value: "john doe");
define(constant_name: "NIM", value: "123456789");
echo "nama : ".NAMA;
echo "nim : ".NIM;



?>


<!-- konstanta -->

<h2> ini materi konstanta </h2>
<pre>
    <?php
    define(constant_name: "UNIV", value: "univ telkom bandung");
    echo "selamat datang di ".UNIV;
    ?>
</pre>



<!-- operator -->
<h2> ini operator </h2>
    <?php
    $a = 10;
    $b = 5;
    echo "tambah: " . ($a + $b)."<br>";
     echo "kurang: " . ($a - $b)."<br>";
      echo "kali: " . ($a * $b)."<br>";
       echo "bagi: " . ($a / $b)."<br>";
    ?>



<!-- kondisi -->

<h2> kondisi </h2>
<pre>
    <?php
    
$nilai = 85;
if ($nilai >= 75){
    echo "lulus";
} else {
    echo "tidak lulus";
}

echo "<br>";

$grade = "B";
switch ($grade) {
    case "A": echo "nilai sempurna";  break;
    case "B": echo "nilai bagus"; break;
    default: echo "nilai kurang";
}

    ?>
</pre>

<!-- perulangan -->

<h2> ini materi konstanta </h2>
<pre>
    <?php
for ($i = 1; $i <= 5; $i++){
    echo "perulangan ke- ".$i."<br>";
}

echo "<br>";
$i = 1;
while ($i <= 3){
    echo "angka".$i."<br>";
    $i++;
}

echo "<br>";
$warna = array("merah", "hijau", "biru");
foreach ($warna as $w){
    echo "warna: ".$w."<br>";
}

    ?>
</pre>


<!-- function -->

<h2> ini materi konstanta </h2>
<pre>
    <?php
function alasSegitiga($alas, $tinggi): float {
    return 0.5 * $alas * $tinggi;
}
echo "Luas segitiga: ".alasSegitiga(50, 10);
    ?>
</pre>

<!-- array -->
<h2> ini materi array </h2>
<pre>
    <?php
$buah = array("apel", "jeruk", "mangga");
echo "buah pertama: ".$buah[0]."<br>";
echo "buah kedua: ".$buah[1]."<br>";
echo "buah ketiga: ".$buah[2]."<br>";

$mhs = [
    "nim" => "12345678",
    "nama" => "andi",
    "jurusan" => "informatika",
    
];
echo "nama mahasiswa: ".$mhs["nama"]."<br>";
echo "jurusan mahasiswa: ".$mhs["jurusan"]."<br>";
echo "nim mahasiswa: ".$mhs["nim"]."<br>";




    ?>  
</pre>

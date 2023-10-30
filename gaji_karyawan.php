Nama  : Yayang Izzatul Haq<br>
NIM   : 22205052<br>
Kelas : PBO<br>


<h1>Form Gaji Karyawan</h1>
<form method="POST" action="">
    <input type="ya"> status menikah (ya\tidak)?

</form>
<?php
$tunjangan=$_POST['tunjangan'];
if ($tunjangan <= 0.35){
   $gaji=6000000*$tunjangan;
   echo "gaji pokok anda : Rp6000000<br>";
   echo "tunjangan anda : Rp21000000<br>";
   echo "total gaji anda : Rp81000000<br>";
}
else{
    $gaji_bersih=$tunjangan;
    $gaji=6000000*$tunjangan;
    echo " gaji pokok : $gaji gaji<br>";
    echo " tunjangan  : $tunjangan tunjangan<br>";
    echo "total gaji adalah Rp $gaji,-";
}
?>
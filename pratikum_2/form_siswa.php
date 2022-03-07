<?php
// Mengambil data yang telah di input
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$tugas = $_POST['nilai_tugas'];
$total = $uts + $uas + $tugas;
$alphabet = $total/3;
if ($alphabet <= 55){
    $lulus = "Anda Tidak Lulus";
}else{
    $lulus = "Selamat Anda Lulus";
}
// Menampilkan Grade menggunakan elseif
if ($alphabet >= 85){
  $grade = "A";
}elseif ($alphabet >= 70){
  $grade = "B";
}elseif ($alphabet >= 56){
  $grade = "C";
}elseif ($alphabet >= 36){
  $grade = "D";
}elseif ($alphabet >= 10){
  $grade = "E";
}else{
  $grade ="I(Tidak ada nilai)";
}

// Menampuilkan Data
echo "Nama : $nama_siswa";
echo "<br/> Mata Kuliah : $mata_kuliah";
echo "<br/>Nilai UTS : $uts";
echo "<br/>Nilai UAS : $uas";
echo "<br/>Niai Tugas : $tugas";
echo "<br/>Grade : $grade";
echo "<br/>Keterangan : $lulus";
echo "<br/>Data telah di $proses";
?>
</body>
</html>
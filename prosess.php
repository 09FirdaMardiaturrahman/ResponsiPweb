<?php 

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$prodi = $_POST['jurusan'];


echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "a");
fputs($fp, "$nama|$nim|$email|$jurusan\n");
fclose($fp);

header("Location: setelahProses.php");

?>




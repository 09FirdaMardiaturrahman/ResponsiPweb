<?php 

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "r");
echo("<center><h1>Table Guest Book</h1>");
echo ("<a href='tampilann.php'>::Isi Data Diri::</a><br><hr>");
echo "<table border='1' width='70%' style='text-align: center;'>";
echo("<tr><td>Tanggal</td><td>Nama</td><td>Email</td><td>Nim</td><td>Jurusan</td></tr>");
$tanggal=date("d-m-Y");
while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo("<tr><td>$tanggal</td><td>$pisah[0]</td><td>$pisah[2]</td><td>$pisah[1]</td><td>$pisah[3]</td></tr>");
    // echo "<tr><td>NAMA: </td><td>: $pisah[0] </td></tr>";
    // echo "<tr><td>NIM: </td><td>: $pisah[1] </td></tr>";
    // echo "<tr><td>EMAIL: </td><td>: $pisah[2] </td></tr>";
    // echo "<tr><td>JURUSAN: </td><td>: $pisah[3] </td></tr>";
}

echo "</table></center>";
?>


    
    
    
    
    




<!DOCTYPE html>
<html>
<head>
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			font-family: times;
			padding: 10px;
			background: #000FFFF;
		}

		.centercolumn {
			float: left;
			width: 100%;
			padding-left: 50px;

		}

		.card {
			background-color: ;
			padding: 20px;
			margin-top: 20px;
			
		}

	</style>
</head>
<body> 
		<div class="centercolumn">
			<div class="card">
				<marquee>
						<h2 align="center" style="font-family: perpetua;">TUGAS AKHIR PEMROGRAMAN WEB</h2><br><br>
				</marquee>
				<div class="card" style="background-color:skyblue; ">
					<div align="center" class="card" style="background-color: skyblue;">
				<h2 style="font-family: Times New Roman">Tentang aku</h2><br>
				<p>Haiii... Saya Firda Mardiaturrahman NIM 2100018027 Kelas A <br>
                  Saya Berasal dari Sumabawa, Nusa Tenggara Barat </p>
			</div>
				<div align="center" class="card">
			<link rel="stylesheet" type="text/css" href="modif.css">
	<script type="text/javascript" src="script.js"></script>
				<div class="calculator">
			<form name="form">
				<input type="text" class="textView" name="textView">
			</form>
			<table>
				<tr>
					<td><input type="button" class="button" value="C" onclick="c()"></td>
					<td><input type="button" class="button del" value="DEL" onclick="del()"></td>
					<td><input type="button" class="button" value="*" onclick="insert('*')"></td>
					<td><input type="button" class="button" value=":" onclick="insert('/')"></td>
				</tr>
				<tr>
					<td><input type="button" class="button" value="7" onclick="insert(7)"></td>
					<td><input type="button" class="button" value="8" onclick="insert(8)"></td>
					<td><input type="button" class="button" value="9" onclick="insert(9)"></td>
					<td><input type="button" class="button" value="-" onclick="insert('-')"></td>
				</tr>
				<tr>
					<td><input type="button" class="button" value="4" onclick="insert(4)"></td>
					<td><input type="button" class="button" value="5" onclick="insert(5)"></td>
					<td><input type="button" class="button" value="6" onclick="insert(6)"></td>
					<td><input type="button" class="button" value="+" onclick="insert('+')"></td>
				</tr>
				<tr>
					<td><input type="button" class="button" value="1" onclick="insert(1)"></td>
					<td><input type="button" class="button" value="2" onclick="insert(2)"></td>
					<td><input type="button" class="button" value="3" onclick="insert(3)"></td>
					<td rowspan="2"><input type="button" class="button equal" value="=" onclick="equal()"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="button" class="button zero" value="0"></td>
					<td><input type="button" class="button" value="."></td>
				</tr>
			</table>
		</div><br><br>

				<h1><center>KALENDER</center></h1><br>
				<div align="center">
					<?php
                $hari	= date("d");
                $bulan	= date ("m");
                $tahun	= date("Y");
                $jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));
                ?>
                <?php
                switch ($bulan) {
                    case 1 : $nmbulan = "Januari"; break;
                    case 2 : $nmbulan = "Februari"; break;
                    case 3 : $nmbulan = "Maret"; break;
                    case 4 : $nmbulan = "April"; break;
                    case 5 : $nmbulan = "Mei"; break;
                    case 6 : $nmbulan = "Juni"; break;
                    case 7 : $nmbulan = "Juli"; break;
                    case 8 : $nmbulan = "Agustus"; break;
                    case 9 : $nmbulan = "September"; break;
                    case 10 : $nmbulan = "Oktober"; break;
                    case 11 : $nmbulan = "November"; break;
                    case 12 : $nmbulan = "Desember"; break;
                 }
                 echo "<center> <h1> $nmbulan $tahun </h1></center>";
                 ?>
                <table style="border:2px solid #00000f " align="center" width="10%" height="35%">
                <tr style="background-color: paleturquoise;">
                    <td align=center><font color="black">Minggu</font></td>
                    <td align=center>Senin</td>
                    <td align=center>Selasa</td>
                    <td align=center>Rabu</td>
                    <td align=center>Kamis</td>
                    <td align=center>Jumat</td>
                    <td align=center>Sabtu</td>
                </tr>
                <?php
                $s = date ("w", mktime (0,0,0,$bulan,1,$tahun));
                for ($ds=1;$ds<=$s;$ds++) {
                    echo "<td></td>";
                }
 
                for ($d=1;$d<=$jumlahhari;$d++) {
	                if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 0) {
		                echo "<tr>"; 
		            }
                $warna="#000000";
 
                if (date("l",mktime (0,0,0,$bulan,$d,$tahun)) == "Sunday") { $warna=" "; }
                echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>"; 
                if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 6) { echo "</tr>"; }
                }
                echo '</table>'; 
				?>
				</div><br><br>
				
			<div align="center" style="background-color: ">
					<div align="center"><strong><font size="7" face="Informatika">Isi Data Diri</font></strong></div>
		            <form name="nama" method="post" action="prosess.php">
			        <table width="58%" border="0" align="center">
				    <tr>

					    <td><h4>Nama lengkap</h4></td>
					    <td><input style="background-color:paleturquoise;" type="text" name="nama" id="nama"></td>
				    </tr>
				    <tr>
					    <td><h4>NIM</h4></td>
					    <td><input style="background-color:paleturquoise;" type="text" name="nim" id="nim"></td>
				    </tr>
				    <tr>
					    <td><h4>E-mail</h4></td>
					    <td><input style="background-color:paleturquoise;" type="text" name="email" id="email"></td>
				    </tr>
				    <tr>
					<td><h4>Jurusan</h4></td>
					<td><select style="background-color:paleturquoise;" name="jurusan" id="jurusan">
						<option>Informatika</option>
						<option>Kedokteran</option>
						<option>Sistem Informasi</option>
						<option>Bahasa Arab</option>
						<option>Teknik Elektro</option>
					</select></td>
				</tr>
				<tr>
					<td>&nbsp</td>
					<td><input style="background-color: ;" type="submit" name="submit" value="kirim" id="kirim"><input style="background-color: ;" type="reset" name="reset" value="batal"></td>
				</tr>
				
			</table>
		</form>

				<br>
		<div align="center"><strong><a href="lihatt.php">::Lihat Data Diri::</a></strong></div>
				</div>
			</div>
	</div>

			
</body>
</html>
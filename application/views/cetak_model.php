<?php

echo "<table border='1'>
<tr>
	<td>No</td>
	<td>NIM</td>
	<td>Nama Lengkap</td>
	<td>Jenis Kelamin</td>
	<td>Angkatan</td>
	<td>Program Studi</td>
</tr>";
foreach ($konten as $rows => $row) {
	echo 
	"<tr>";
	foreach ($row as $col => $cell){
		echo "<td>" . $cell . "</td>";
	}
	echo "</tr>";
}
echo "</table>";
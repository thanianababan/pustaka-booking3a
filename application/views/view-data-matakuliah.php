<html>
<head>
	<title>Tampil Data Matakuliah</title>
</head>
<body>
		<table>
			<tr>
				<th colspan="3">
				 Tampil Data Mata Kuliah
				</th>
			</tr>

			<tr>
				<td colspan="3">
				 <hr>
				 </td>
			</tr>

			<tr>
			 <th>Kode Matkul</th>
				<th>:</th>
				<td>
				 <?= $kode; ?></td>
			</tr>

			<tr>
				<td>Nama Matkul</td>
				<td>:</td>
				<td>
					<?= $nama; ?>
						
					</td>
			</tr>

			<tr> <td>SKS</td>
				<td>:</td>
				<td>
					<?= $sks; ?>
						
					</td>
			</tr>

			<tr> <td colspan="3"> <a href="<?= base_url('matakuliah'); ?>">Kembali</a> </td>
			</tr>
		</table>
</body>
</html>
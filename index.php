<!DOCTYPE html>
<html>
<head>
	<title>form pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrap">
		<div class="container">
	<h1>Form Pendaftaran</h1>
	<form action="form_add_aksi.php" method="POST">
		<table>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama_lengkap"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td><input type="text" name="tempat_lahir"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="tanggal_lahir"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki
				<input type="radio" name="jk" value="Perempuan">Perempuan
				</td>
			</tr>
			<tr>
				<td>No Telepon</td>
				<td>:</td>
				<td><input type="number" name="no_telepon"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td>Pilih Organisasi</td>
				<td>:</td>
				<td><select name="pilih_organisasi">
					<option>--Pilih Organisasi--</option>
					<option>Kerohanian</option>
					<option>Olahraga</option>
					<option>Musik</option>
					<option>Sains & Teknologi</option>
					<option>Fotografi</option>
					<option>Pramuka</option>
				</select>
			</td>
		</tr>
      <tr>
				<td></td>
				<td></td>
				<td><button tyoe="submit" name="kirim">Kirim</button>
					<button tyoe="reset" name="reset">Batal</button>
				</td>
			</tr>
      </table>
	</form>
</div>
</div>
</body>
</html>

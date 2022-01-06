<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="sidebar">
  <div class="block">MENU</div>
  <a class="active" href="index.php">Arsip Surat</a>
  <a href="about.php">About</a>
</div>

<div class="content">
    <h1>Arsip Surat >> Unggah</h1>
    <h3>Unggah surat yang telah terbit pada form untuk diarsipkan.</h3>
    <h3>Catatan: * Gunakan file berformat pdf</h3>
	<br/>
	<br/>
  <form method="post" action="upload_method.php" enctype="multipart/form-data">
  <table class="none" style="width:100%;">
			<tr>			
				<td>Nomor Surat</td>
				<td><input class="inpt" type="text" name="nomor"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>
                <select name="kategori" class="button button2">
                    <option value="Undangan">Undangan</option>
                    <option value="Pengumuman">Pengumuman</option>
                    <option value="Nota Dinas">Nota Dinas</option>
                    <option value="Pemberitahuan">Pemberitahuan</option>
                </select>
                </td>
			</tr>
            <tr>
				<td>Judul</td>
				<td><input class="inpt" type="text" name="judul"></td>
			</tr>
			<tr>
				<td>File Surat (PDF)</td>
				<td><input class="button button2" type="file" name="file" id="file" accept="application/pdf" ><br></td>
			</tr>	
            <tr>
                <td colspan="2">
                    <a href="index.php"><button class="button button6">Kembali</button></a>
                    <input class="button button1" type="submit" value="Simpan">
                </td>
            </tr>	
		</table>
  </form>
</div>

</body>
</html>

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
    <h1>Arsip Surat >> Edit</h1>
    <h3>Catatan: * Gunakan file berformat pdf</h3>
	<br/>
	<br/>
    <?php 
		include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"select * from arsip where id='$id'");
		while($d = mysqli_fetch_array($data)){
			?>
  <form method="post" action="edit_method.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
  
			
  <table class="none" style="width:100%;">
			<tr>			
				<td>Nomor Surat</td>
				<td><input class="inpt" type="text" name="nomor" value="<?php echo $d['nomor']; ?>"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>
                <select class="button button2" name="kategori">
                    <option selected="selected"><?php echo $d['kategori']; ?></option>
                    <option value="Undangan">Undangan</option>
                    <option value="Pengumuman">Pengumuman</option>
                    <option value="Nota Dinas">Nota Dinas</option>
                    <option value="Pemberitahuan">Pemberitahuan</option>
                </select>
                </td>
			</tr>
            <tr>
				<td>Judul</td>
				<td><input class="inpt" type="text" name="judul" value="<?php echo $d['judul']; ?>"></td>
			</tr>
			<tr>
				<td>File Surat (PDF)</td>
				<td><input class="button button2" type="file" name="file" value="<?php echo $d['pdf']; ?>" accept="application/pdf"><br></td>
			</tr>	
            <tr>
                <td colspan="2">
                <a style="text-decoration: none; color:black;" href="show.php?id=<?php echo $id; ?>"><button class="button button6">Kembali</button></a>
                    <input class="button button1" type="submit" value="Simpan">
                </td>
            </tr>	
		</table>
        
  </form>
  <?php 
		}
		?>
</div>

</body>
</html>

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
    <h1>Arsip Surat</h1>
    <h3>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.</h3>
    <h3>Klik "Lihat" pada kolom aksi untuk menampilkan surat.</h3>
	<br/>
	<form method="GET" action="index.php">
		<label>Cari surat: </label>
		<input class="search" type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
		<button class="button button2" type="submit">Cari</button>
	</form>
	<br/>
	<br/>
	<table class="new">
		<tr>
			<th>Nomor Surat</th>
			<th>Kategori</th>
			<th>Judul</th>
			<th>Waktu Pengarsipan</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';

				if(isset($_GET['kata_cari'])) {
					$kata_cari = $_GET['kata_cari'];
                    $data = mysqli_query($koneksi,"SELECT * FROM arsip WHERE nomor like '%".$kata_cari."%' OR kategori like '%".$kata_cari."%' OR judul like '%".$kata_cari."%' OR tgl_arsip like '%".$kata_cari."%'");
				} else {
					$data = mysqli_query($koneksi,"select * from arsip");
				}
				
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['nomor']; ?></td>
				<td><?php echo $d['kategori']; ?></td>
				<td><?php echo $d['judul']; ?></td>
                <td><?php echo $d['tgl_arsip']; ?></td>
				<td>
					<a href="delete_method.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin ingin menghapusnya?')"><button class="button button3">Hapus</button></a>
                    <a href="filepdf/<?php echo $d['pdf']; ?>"><button class="button button6">Unduh</button></a>
                    <a href="show.php?id=<?php echo $d['id']; ?>"><button class="button button2">Lihat</button></a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
    <br>
    <a href="create.php"><button class="button button1">Arsipkan Surat</button></a>
</div>

</body>
</html>

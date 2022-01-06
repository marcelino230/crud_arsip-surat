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
    <?php 
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from arsip where id='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
            <h3>Nomor: <?php echo $d['nomor']; ?></h3>
            <h3>Kategori: <?php echo $d['kategori']; ?></h3>
            <h3>Judul: <?php echo $d['judul']; ?></h3>
            <h3>Waktu Unggah: <?php echo $d['tgl_arsip']; ?></h3>
            <iframe src="pdfview.php?id=<?php echo $id; ?>" width="90%" height="500px">
            </iframe>
        
    <br>
    <br>
    <a href="index.php"><button class="button button2">Kembali</button></a>
    <a href="filepdf/<?php echo $d['pdf']; ?>"><button class="button button6">Unduh</button></a>
    <a href="update.php?id=<?php echo $id; ?>"><button class="button button1">Edit/Ganti File</button></a>
    <?php 
    }
    ?>
</div>

</body>
</html>

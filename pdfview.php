<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from arsip where id='$id'");
    while($d = mysqli_fetch_array($data)){
        $pdf_path = 'filepdf/';
        header('Content-type: application/pdf');
        readfile($pdf_path . $d['pdf']);
    }
    ?>
</body>
</html>
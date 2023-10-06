<?php
include_once("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap offline -->

    <link rel="stylesheet" href="assets/css/bootstrap.css"> 

    <!-- Bootstrap Online -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">   

    <title>To Do List</title>  <!-- Judul Halaman -->
</head>
<body>
    <div class="container">
        <h3>
            To Do List
            <small class="text-muted">
                catat semua hal yang akan kamu kerjakan disini
            </small>
        </h3>
        <hr>
        
        <!-- Form Input Data-->

        <form class="form row" method="POST" action="" name="myForm" onsubmit="return(validate());">
            <!-- Kode php untuk menghubungkan form dengan database -->
            <?php
            $isi = '';
            $tgl_awal = '';
            $tgl_akhir = '';
            if (isset($_GET['id'])) {
                $ambil = mysql_query(
</body>
</html>
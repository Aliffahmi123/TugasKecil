<html>
  <head>
     <meta charset="UTF-8">
   <title>Data Mahasiswa</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/fonts/iconic/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">

  <link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
  <link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">

  <link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
   
  </head>
  <body>
    <div class="limiter" align="center">
    <div class="container-login100" style="background-image: url('assets/images/yaa.jpg');">
      <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" align="center">
       
          <span class="login100-form-title p-b-10">
    Data Mahasiswa</span>
    <hr><center>
    <a href='<?php echo base_url("siswa/tambah"); ?>'><font color="blue">Tambah Data Mahasiswa</a><br><br></center>
    <table align="center" border="1" >
      <tr align="center">
        <th>NIM</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th colspan="2">Aksi</th>
      </tr>
      <?php
      if( ! empty($siswa)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
        foreach($siswa as $data){
          echo "<tr>
          <td>".$data->nis."</td>
          <td>".$data->nama."</td>
          <td>".$data->jenis_kelamin."</td>
          <td>".$data->telp."</td>
          <td>".$data->alamat."</td>
          <td><a href='".base_url("siswa/ubah/".$data->nis)."'>Ubah</a></td>
          <td><a href='".base_url("siswa/hapus/".$data->nis)."'>Hapus</a></td>
          </tr>";
        }
      }else{ // Jika data siswa kosong
        echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
      }
      ?>
    </table>
  </body>
</html>
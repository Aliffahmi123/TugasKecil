<html>
  <head>
     <meta charset="UTF-8">
   <title>Data Mahasiswa</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="icon" type="image/png" href="../../assets/images/icons/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="../../assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../../assets/fonts/iconic/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" type="text/css" href="../../assets/vendor/animate/animate.css">

  <link rel="stylesheet" type="text/css" href="../../assets/vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="../../assets/vendor/animsition/css/animsition.min.css">
  <link rel="stylesheet" type="text/css" href="../../assets/vendor/select2/select2.min.css">

  <link rel="stylesheet" type="text/css" href="../../assets/vendor/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/main.css">
   
  </head>
  <body>
    <div class="limiter" align="center">
    <div class="container-login100" style="background-image: url('../../assets/images/yaa.jpg');">
      <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" align="center">
       
          <span class="login100-form-title p-b-10">
    <h1 align="center">Ubah Data Diri Anda</h1></span>
    <hr>
    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("siswa/ubah/".$siswa->nis); ?>
      <table cellpadding="8" align="center">
        <tr>
          <td>NIM</td>
          <td><input type="text" name="input_nis" value="<?php echo set_value('input_nis', $siswa->nis); ?>"  readonly style="background-color: lightgrey; height:20px; width:200px;"></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="input_nama" value="<?php echo set_value('input_nama', $siswa->nama); ?>" style="background-color: lightgrey; height:20px; width:200px;"></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>
          <input type="radio" name="input_jeniskelamin" value="Laki-laki" <?php echo set_radio('jeniskelamin', 'Laki-laki', ($siswa->jenis_kelamin == "Laki-laki")? true : false); ?>> Laki-laki
          <input type="radio" name="input_jeniskelamin" value="Perempuan" <?php echo set_radio('jeniskelamin', 'Perempuan', ($siswa->jenis_kelamin == "Perempuan")? true : false); ?>> Perempuan
          </td>
        </tr>
        <tr>
          <td>Telepon</td>
          <td><input type="text" name="input_telp" value="<?php echo set_value('input_telp', $siswa->telp); ?>"style="background-color: lightgrey; height:20px; width:200px;"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><textarea name="input_alamat" style="background-color: lightgrey; height:130px; width:200px;"><?php echo set_value('input_alamat', $siswa->alamat); ?></textarea></td>
        </tr>
      </table>
      <center>
      <hr>
      <input type="submit" name="submit" value="Ubah">
      <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
    <?php echo form_close(); ?></center></div></div>
  </body>
</html>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Tugas pwpb</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <style>
      .pengguna{
        width: 150px;
        height: 150px;
        border-radius: 10px;
      }
      .card{
        border-radius: 10px;
      }
        
      
    </style>
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>

  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Tentang Kami</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="tugaspertama.php">TUGAS SATU</a>
    <a class="p-2 text-dark" href="tugaskedua.php">TUGAS DUA</a>
    <a class="p-2 text-dark" href="form.php">TUGAS TIGA</a>
    <a class="p-2 text-dark" href="#"> TUGAS EMPAT</a>
  </nav>
  <a class="btn btn-outline-primary" href="index.php">Beranda</a>
</div>
<head>
	<title>Pengolahan Form</title></head>
<body style="background-color:cadetblue ;">
	<font color="black">
    <h2><center>DATA IDENTITAS PESERTA DIDIK BARU</center></h2>
    <h2><center>TAHUN AJARAN (2019/2020)</center></h2>
    </font>
<form action="" method="post">
	<center>

	<table>
<tr>
	<td>Nama Lengkap</td>
	<td>:</td>
	<td><input type="text" name ="mm" size ="25" placeholder="masukan nama anda"></td><br>
</tr>
<tr>
	<td>Nama Panggilan</td>
	<td>:</td>
	<td><input type="text" name ="nmp" size ="25" placeholder="masukan nama anda"></td><br>
</tr>
<tr>
	<td>Jenis Kelamin</td>
	<td>:</td>
	<td><input type="radio" name="jenis_kelamin1" value="laki-laki"/>laki-laki
	<input type="radio" name="jenis_kelamin1" value="perempuan"/>perempuan</td><br>
</tr>
<tr>
	<td>NISN</td>
	<td>:</td>
	<td><input type="text" name ="nisn" size ="25" ></td><br>
</tr>
<tr>
	<td>Tempat Tanggal Lahir</td>
	<td>:</td>
	<td><input type="text" name ="ttl" size ="25" ></td><br>
</tr>
<tr>
	<td>NIK</td>
	<td>:</td>
	<td><input type="text" name ="nik" size ="25" </td><br>
</tr>
<tr>
	<td>Asal Sekolah</td>
	<td>:</td>
	<td><input type="text" name ="as" size ="25"</td><br>
</tr>
<tr>
	<td>No SKHU</td>
	<td>:</td>
	<td><input type="text" name ="skhu" size ="25" </td><br>
</tr>
<tr>
	<td>Tanggal Diterima Disekolah Ini</td>
	<td>:</td>
	<td><input type="date" name ="diterima" size ="25" </td><br>
</tr>
<tr>
	<td>Jika Pindah Apakah Alasannya</td>
	<td>:</td>
	<td><input type="text" name ="alasan" size ="25" placeholder="Berikan alasan"></td><br>
</tr>
<tr>
	<td>Agama</td>
	<td>:</td>
	<td><select name="agama" id="agama">
		<option>Islam</option>
		<option>Kristen</option>
		<option>Khatolik</option>
		<option>Budha</option>
		<option>Khonghucu</option>
		<option>Hindu</option></select>
	</td>
</tr>
<tr>
	<td>Alamat</td>
	<td>:</td>
	<td><input type="text" name ="alamat" size ="25" </td><br>
</tr>
<tr>
	<td>Tinggal Bersama</td>
	<td>:</td>
	<td><input type="radio" name="tinggal_bersama1" value="Orang Tua Kandung"/>Orang Tua Kandung
		<input type="radio" name="tinggal_bersama1" value="Orang Tua Angkat"/>Orang Tua Angkat</td>
</tr>
<tr>
	<td>Transporrtasi</td>
	<td>:</td>
	<td><select name="Transportasi" id="Transporrtasi">
		<option>Motor</option>
		<option>Mobil</option>
		<option>Angkutan Umum</option></select>
	</td>
</tr>
<tr>
	<td>No Hp</td>
	<td>:</td>
	<td><input type="text" name ="Hp" size ="25" </td><br>
</tr>
<tr>
	<td>No KPS</td>
	<td>:</td>
	<td><input type="text" name ="kps" size ="25"/td><br>
</tr>
<tr>
	<td><b>Data Ayah Kandung</b></td>
</tr>
<tr>
	<td>Nama Lengkap </td>
	<td>:</td>
	<td><input type="text" name ="nama_ayah" size ="25"/td><br>
</tr>
	<td>Tahun Lahir</td>
	<td>:</td>
	<td><input type="date" name ="lahir" size ="25"/td><br>
</tr>
	<td>Pendidikan</td>
	<td>:</td>
	<td><input type="text" name ="Pendidikan" size ="25"/td><br>
</tr>
	<td>Pekerjaan</td>
	<td>:</td>
	<td><input type="text" name ="kerja" size ="25"/td><br>
</tr>
	<td>Penghasilan</td>
	<td>:</td>
	<td><input type="radio" name="hasil" value="<500.000">1 < 500.000
			<input type="radio" name="Penghasilan" value="2 jt">5000-2 jt
			<input type="radio" name="Penghasilan" value="4 jt">4 jt-6jt
			<input type="radio" name="penghasilan" value="1 lbh 6 jt">lebih dr 6 jt</td>
<tr>
	<td><b>Data Ibu Kandung</b></td>
</tr>
<tr>
	<td>Nama Lengkap </td>
	<td>:</td>
	<td><input type="text" name ="nama_ibu" size ="25"/td><br>
</tr>
	<td>Tempat Tanggal Lahir</td>
	<td>:</td>
	<td><input type="date" name ="tahun_lahir" size ="25"/td><br>
</tr>
	<td>Pendidikan</td>
	<td>:</td>
	<td><input type="text" name ="pendidikan" size ="25"/td><br>
</tr>
	<td>Pekerjaan</td>
	<td>:</td>
	<td><input type="text" name ="kerja" size ="25"/td><br>
</tr>
	<td>Penghasilan</td>
	<td>:</td>
	<td><input type="radio" name="Penghasilan" value="<500.000">1 < 500.000
			<input type="radio" name="Penghasilan" value="2 jt">5000-2 jt
			<input type="radio" name="Penghasilan" value="4 jt">4 jt-6jt
			<input type="radio" name="penghasilan" value="1 lbh 6 jt">lebih dr 6 jt</td>
	</table>
	 <div class="form-group row">
                <label class="col-sm-4 col-form-label"></label>
                <div class="col-sm-7">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="" class="btn btn-danger">Reset</a>
                </div>
     </div>    
	<!-- <input type="button" name="submit" value="simpan">
	<input type="button" name="submit" value="reset"> -->
</center>
</form>
<?php
    if (isset($_POST['mm'])){
        $mm=$_POST['mm'];
        echo "nama lengkap:<b>$mm</b><br>";
    }
    if (isset($_POST['nmp'])){
        $nmp=$_POST['nmp'];
        echo "nama panggilan:<b>$nmp</b><br>";
    }
    if (isset($_POST['jenis_kelamin1'])){
        $kelamin=$_POST['jenis_kelamin1'];
        echo "jenis kelamin:<b>$kelamin</b><br>";
    }
    if (isset($_POST['nisn'])){
        $nisn=$_POST['nisn'];
        echo "Nisn :<b>$nisn</b><br>";
    }
    if (isset($_POST['ttl'])){
        $ttl=$_POST['ttl'];
        echo "Tempat Tanggal Lahir:<b>$ttl</b><br>";
    }
    if (isset($_POST['nik'])){
        $nik=$_POST['nik'];
        echo "nik:<b>$nik</b><br>";
    }
    if (isset($_POST['as'])){
        $as=$_POST['as'];
        echo "Asal Sekolah:<b>$as</b><br>";
    }
    if (isset($_POST['skhu'])){
        $skhu=$_POST['No SKHU'];
        echo "No SKHU:<b>skhu</b><br>";
    }
    if (isset($_POST['diterima'])){
        $diterima=$_POST['diterima'];
        echo "Tanggal diterima disekolah ini:<b>$diterima</b><br>";
    }
    if (isset($_POST['alasan'])){
        $alasan=$_POST['alasan'];
        echo "jika pindah apa alasannya:<b>$alasan</b><br>";
    }
    if (isset($_POST['agama'])){
        $agama=$_POST['agama'];
        echo "agama:<b>$agama</b><br>";
    }
    if (isset($_POST['alamat'])){
        $alamat=$_POST['alamat'];
        echo "Alamat:<b>$alamat</b><br>";
    }
    if (isset($_POST['tinggal_bersama1'])){
        $tinggal_bersama1=$_POST['tinggal_bersama1'];
        echo "Tinggal Bersama:<b>$tinggal_bersama1</b><br>";
    }
    if (isset($_POST['Transportasi'])){
        $Transportasi=$_POST['Transportasi'];
        echo "Transportasi:<b>$Transportasi</b><br>";
    }
    if (isset($_POST['Hp'])){
        $Hp=$_POST['Hp'];
        echo "No Hp:<b>Hp</b><br>";
    }
    if (isset($_POST['kps'])){
        $kps=$_POST['kps'];
        echo "No KPS:<b>$kps</b><br>";
    }
    if (isset($_POST['nama_ayah'])){
        $nama_ayah=$_POST['nama_ayah'];
        echo "Nama Lengkap:<b>$nama_ayah</b><br>";
    }
    if (isset($_POST['lahir'])){
        $tlayah=$_POST['lahir'];
        echo "Tahun Lahir:<b>$tlayah</b><br>";
    }
    if (isset($_POST['pendidikan'])){
        $pendidikan=$_POST['Pendidikan'];
        echo "Pendidikan:<b>$pendidikan</b><br>";
    }
    if (isset($_POST['kerja'])){
        $kerja=$_POST['kerja'];
        echo "Pekerjaan:<b>$kerja</b><br>";
    }
    if (isset($_POST['hasil'])){
        $hasil=$_POST['hasil'];
        echo "Penghasilan:<b>$hasil</b><br>";
    }
    if (isset($_POST['nama_ibu'])){
        $nama_ibu=$_POST['nama_ibu'];
        echo "Nama Lengkap:<b>$nama_ibu</b><br>";
    }
    if (isset($_POST['tahun_lahir'])){
        $tahun_lahir=$_POST['tahun_lahir'];
        echo "Tahun Lahir:<b>$tahun_lahir</b><br>";
    }
    if (isset($_POST['pendidikan'])){
        $pendidikan=$_POST['Pendidikan'];
        echo "Pendidikan:<b>$pendidikan</b><br>";
    }
    if (isset($_POST['kerja'])){
        $kerja=$_POST['kerja'];
        echo "Pekerjaan:<b>$kerja</b><br>";
    }
    if (isset($_POST['hasil'])){
        $hasil=$_POST['hasil'];
        echo "Penghasilan:<b>$hasil</b><br>";
    }
    ?>
</body>
</html>
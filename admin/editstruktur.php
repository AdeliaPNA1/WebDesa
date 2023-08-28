<?php
include ("../inc/koneksi.php");
$id = $_GET['id'];
$query = $mysqli->query("SELECT * FROM struktur WHERE id='$id'");
while($data = $query->fetch_array()){


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
			<h1 class="text-center">
				Edit Struktur
			</h1>
				<form action="updatestruktur.php" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nama</label>
						<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
				    <input type="text" name="nama" value="<? echo $data['nama'] ?>"class="form-control" id="exampleInputEmail1" >
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">NIP</label>
				    <input type="text" name="nip" value="<?php echo $data['nip'] ?>" class="form-control" id="exampleInputPassword1" >
				  </div>
					<div class="from-group"> <!--jabatan dibuat hidden agar tidak mengubah posisi jabatan-->
						<!-- <label for="exampleInputJabatan">Jabatan</label> -->
						<input type="hidden" name="jabatan" value="<? echo $data['jabatan'] ?>" class="form-control" id="exampleInputJabatan" >
					</div>
					<br>
				  <div class="form-group">
				    <label>Input Foto</label>
				    <input type="file" name="foto" value="<? echo $data['foto'] ?>"><? echo $data['foto'] ?>
				  </div>
					<a onclick="window.history.back()"><button type="button" class="btn btn-default" name="button"><span class="fa fa-chevron-left "></span> Kembali </button></a>
				  <button type="submit" class="btn btn-primary pull-right">Simpan</button>
				</form>
		</div>
	</div>
			<?php } ?>
</body>
</html>
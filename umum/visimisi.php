<?php
	include ("../inc/koneksi.php");
	#$id = $_GET['id'];
	#$query = $mysqli->query("SELECT * FROM visimisi WHERE id='$id'");
	#while($data = $query->fetch_array()){

	/*$id = $_POST['id'];
	$visi = $_POST['visi'];
	$misi = $_POST['misi'];
	$mysqli->query("UPDATE visimisi SET visi = '$visi', misi = '$misi', WHERE id='$id'"); */

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
				Edit Visi & Misi
			</h1>
				  <div class="form-group">
				    <label for="visi">Visi</label>
				    <input type="hidden" name="id" value="">
				    <textarea rows="8" class="form-control" name="visi"></textarea>
				  </div>
				  <div class="form-group">
				    <label for="misi">Misi</label>
				    <textarea rows="8" class="form-control" name="misi"></textarea>
				  </div>
					<a onclick="window.history.back()"><button type="button" class="btn btn-default" name="button"><span class="fa fa-chevron-left "></span> Kembali </button></a>
				  <button type="submit" class="btn btn-primary pull-right">Simpan</button>
				</form>
		</div>
	</div>
</body>
</html>
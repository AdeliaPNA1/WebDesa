<?php
include ("../inc/koneksi.php");
include ("../inc/navbar.html");


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/jumbotron/">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>


  </head>
    <body>
      <br>
      <br>
      <h1 class="text-center">
       Profil Desa
      </h1>
<?php 
include("../inc/koneksi.php");
if(isset($_POST['tambahprofil']))
{

  global $conn;

  $hasil = mysqli_query($conn,"INSERT INTO profildesa (namadesa,keterangan,visi,misi) VALUES ('".$_POST['namadesa']."','".$_POST['keterangan']."','".$_POST['visi']."','".$_POST['misi']."') ");
}

if(isset($_POST['editprofil']))
{

  global $connect;

  $hasil = mysqli_query($conn,"UPDATE profildesa SET namaDesa='".$_POST['namadesa']."',keterangan='".$_POST['keterangan']."',visi='".$_POST['visi']."',misi='".$_POST['misi']."'WHERE ID='".$_POST['ID']."' ");

}


if (isset($_GET['act']) && $_GET['act'] == 'edit') {

  $id = (int)$_GET['id'];
  
  global $conn;
  $sql = mysqli_query($conn,"SELECT * FROM profildesa WHERE ID = '$id' ");
  while($r = mysqli_fetch_array($sql)) {
    extract($r);

    $namadesa = $namaDesa;
    $keterangan = $keterangan;
    $visi = $visi;
    $misi = $misi;
    $ID = $ID;
  }

}

if (isset($_GET['act']) && $_GET['act'] == 'hapus') {

  $id = (int)$_GET['id'];

  global $conn;

  $sql = mysqli_query($conn,"DELETE FROM profildesa WHERE ID = '$id' ");

  header('Location:profil.php');

}

 ?>

<div class="w100">
  <form action="profiladmin.php" method="POST">

    <input type="hidden" name="ID" value="<?=(isset($ID) ? $ID : '');?>">

    <fieldset>
      <legend>Tambah Profil</legend>

      <div class="formnama w30">Nama Desa:<br>
      <input type="text" name="namadesa" placeholder="Nama Desa" value="<?=(isset($namadesa) ? $namadesa: '');?>" class="form100">
      </div> 

      <div class="formnama w30">Keterangan:<br>
      <input type="text" name="keterangan" placeholder="Keterangan" value="<?=(isset($keterangan) ? $keterangan : '');?>" class="form100">
      </div> 

      <div class="formnama w30">Visi Desa:<br>
      <input type="text" name="visi" placeholder="Visi" value="<?=(isset($visi) ? $visi : '');?>" class="form100">
      </div> 

      <div class="formnama w30">Misi:<br>
      <input type="text" name="misi" placeholder="Misi" value="<?=(isset($misi) ? $misi : '');?>" class="form100">
      </div> 

      <div class="formnama w30">Tampilkan:<br>

        <select name="terbit">
          <option value="1" <?=((isset($terbit) && $terbit==1) ? 'selected' : ''); ?>>Yes</option>
          <option value="0" <?=((isset($terbit) && $terbit==0) ? 'selected' : ''); ?>>No</option>
        </select>

      </div>

      <input type="submit" name="<?=(isset($ID) ? 'editprofil' : 'tambahprofil');?>" value="<?=(isset($ID) ? 'Edit' : 'Tambah');?>" class="btn-primary">
    </fieldset>
  </form>
  
</div>
<div class="clear"></div>

<div class="w100">
    <fieldset>
      <legend>List Profil</legend>

      <div class="w100 fl list bg_dark">
        <div class="w5 fl center">ID</div>
        <div class="w15 fl">Nama Desa</div>
        <div class="w15 fl">Keterangan</div>
        <div class="w15 fl">Visi</div>
        <div class="w15 fl">Misi</div>
        <div class="w15 fl">Aksi</div>
        <div class="clear"></div>
      </div>

      <?php
      include("../inc/koneksi.php"); 

      global $conn;

      $sql = mysqli_query($conn,"SELECT * FROM profildesa ORDER BY ID DESC");
      while($r = mysqli_fetch_array($sql))
      {
        extract($r);
      ?>

      <div class="w100 fl list">
        <div class="w5 fl center"><?=$id?></div>
        <div class="w20 fl"><?=$namadesa?></div>
        <div class="w20 fl"><?=$keterangan?></div>
        <div class="w20 fl"><?=$visi?></div>
        <div class="w20 fl"><?=$misi?></div>
        <div class="w20 fl">
          <a href="./?mod=kategori&act=edit&id=<?=$ID?>" class="btn btn-primary small">Edit</a> <a href="./?mod=kategori&act=hapus&id=<?=$ID?>" class="btn btn-red small">Delete</a> 

        </div>
        <div class="clear"></div>
      </div>
    </fieldset>
</div>
<?php 
  }
 ?>
<div class="clear"></div>
<br>
<br>
<div class="w100">
<?php 
include("../inc/koneksi.php");
if (isset($_POST['add'])) {
  
  global $gambar;
  //cek apakah ada gambar
  if(!empty($_FILES['gambar']['name']) && ($_FILES['gambar']['error'] !== 4 ))
  {
    $gambarfile = $_FILES['gambar']['tmp_name'];
    $gambarfile_name = $_FILES['gambar']['name'];

    $filetype = $_FILES['gambar']['type'];

    $allowtype = array('image/jpeg', 'image/jpg', 'image/png');

    if(!in_array($filetype, $allowtype))
    {

      echo 'Invalid file type';
      exit;
    }

    $path = PATH_GAMBAR.'/';

    if( isset($gambarfile) && isset($gambarfile_name) ) {

      $gambarbaru = preg_replace("/[^a-zA-Z0-9]/", "_", $_POST['judul']);

      $dest1 = '../'.$path.$gambarbaru.'.jpg';
      $dest2 = $path.$gambarbaru.'.jpg';


      copy($_FILES['gambar']['tmp_name'], $dest1);

      $gambar = $dest2;

    } else {

      $gambar = $_POST['gambar'];
    }
  }

  if($_POST['aksi']=='tambah')
  {
  global $conn;
    $sql = "INSERT INTO struktur(Judul,Tahun,Gambar) VALUES ('".$_POST['judul']."','".$_POST['tahun']."','$gambar')";

    $hasil = mysqli_query($conn,$sql);
  }
  if($_POST['aksi']=='edit')
  {
    global $conn;
    $sql = mysqli_query($conn,"UPDATE struktur SET Judul='".$_POST['judul']."' , Tahun='".$_POST['tahun']."',Gambar='$gambar') ");
  }

}
  if(isset($_GET['act']) && $_GET['act']=='edit'){

  $id = (int)$_GET['id'];
  global $conn;

  $sql = mysqli_query($conn,"SELECT * FROM struktur WHERE ID='$id' ");
  while($b = mysqli_fetch_array($sql)){
    extract($b);

    $id = $id;
    $judul = $judul;
    $tahun = $tahun;
    $gambar = $gambar;

    if(isset($_GET['hapusgambar']) && $_GET['hapusgambar']=='yes')
    {
      unlink('../'.$gambar);
      $sqlupdate = mysqli_query($conn,"UPDATE struktur SET Gambar='' WHERE ID='$id' ");

      echo'<meta http-equiv="REFRESH" content="0;url=./?mod=berita&act=edit&id='.$id.'" />';
    }

  }

}

if(isset($_GET['act']) && $_GET['act']=='hapus'){

  $id = (int)$_GET['id'];
  global $conn;

  $sql = mysqli_query($conn,"SELECT * FROM struktur WHERE ID='$id' ");
  while($b = mysqli_fetch_array($sql)){

    $gbr = $b['Gambar'];
    unlink('../'.$gbr);
  }

  $hapus = mysqli_query($conn,"DELETE FROM struktur WHERE ID='$id' ");
}

?>

<div class="w100">
  <form action="profiladmin.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=(isset($id) ? $id : '')?>">
    <input type="hidden" name="aksi" value="<?=(isset($id) ? 'edit' : 'tambah');?>">
    <fieldset>
      <legend>Tambah Struktur</legend>

      <div class="formnama">
      <label>Judul</label>:<br>
      <input type="text" name="judul" placeholder="Judul" value="<?=(isset($judul) ? $judul : '')?>" size="40">
      </div>

      <div class="formnama">
      <label>Tahun</label>:<br>
      <input type="text" name="tahun" placeholder="Tahun" value="<?=(isset($judul) ? $judul : '')?>" size="40">

      </div>

      <div class="formnama">
      <label>Gambar</label>:<br>
      <?php 
      if(!empty($gambar) && !empty($id) ){
        echo'
        <div class="imgsedang">
        <input type="hidden" name="gambar" value="'.$gambar.'">
        <img src="'.URL_SITUS.$gambar.'">
        <div class="imghapus"><a href="./?mod=berita&act=edit&hapusgambar=yes&id='.$id.'">x</a></div>
        </div>

        ';
      }else
      {

        echo'<input type="file" name="gambar">';
      }

       ?>
      <div class="formnama">
      <label>Terbitkan</label>:<br>
        <select name="terbit">
          <option value="1" <?=((isset($terbit) && $terbit==1) ? 'selected' :'')?>>Yes</option>
          <option value="0" <?=((isset($terbit) && $terbit==0) ? 'selected' :'')?>>No</option>
        </select>
      </div>

      <input type="submit" name="add" value="<?=(isset($id) ? 'Edit' :'Tambah')?>" class="btn-primary">

    </fieldset>
    
  </form>

</div>

<div class="clear"></div>

<div class="w100">
  <fieldset>
    <legend>List Struktur</legend>

    <div class="w100 list fl bold bg_dark">
      <div class="w10 fl">ID</div>
      <div class="w40 fl">Judul</div>
      <div class="w20 fl">Tahun</div>
      <div class="w20 fl">Gambar</div>
      <div class="w10 fl">Aksi</div>
    </div>

    <?php 
    include("../inc/koneksi.php");
    global $conn;

    $hasil = mysqli_query($conn,"SELECT * FROM struktur ORDER BY ID DESC");
    while ($b = mysqli_fetch_array($hasil)) {
      extract($b);
      ?>

      <div class="w100 list fl">
      <div class="w10 fl"><?=$ID;?></div>
      <div class="w40 fl"><?=$Judul;?></div>
      <div class="w20 fl"><?=$Tahun;?></div>
      <div class="w20 fl"><?=$Gambar;?></div>
      <div class="w10 fl">
        <a href="./?mod=berita&act=edit&id=<?=$ID;?>" class="btn-primary pd5">edit</a>
        <a href="./?mod=berita&act=hapus&id=<?=$ID;?>" class="btn-red pd5">hapus</a>

      </div>
    </div>
    <?php
    }
  ?>

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
<footer class="mt-auto" font-color="bg-white">
   <div class="container">
    <div class="row">
        <div class="col-xs-12">
            Copyright &COPY; <?= date('Y')?> KELURAHAN GENENG DUWUR  
        </div>
        <div class="col-xs-12">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16">
          <path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
          <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          </svg> 0843289359878237985   | 
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
          <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
          </svg> sbfjsabfjkakjh@gfjksdhj.cisd
        </div>
    </div>
  </div>
</footer>
</div>
  </body>
</html>

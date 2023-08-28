<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Home</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/jumbotron/">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/footers/">
    
    <script src="http://maps.googleapis.com/maps/api/js"></script>

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

   <script>
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-7.400146,110.84185),
    zoom:9,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // membuat Marker
  var marker=new google.maps.Marker({
      position: new google.maps.LatLng(-7.400146,110.84185),
      map: peta
  });

}

// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
</script>


  </head>

  <body class="p-3 m-0 border-0 bd-example">

  <div class="cover-container d-flex w-150 h-150 p-4 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <nav class="navbar fixed-top navbar-expand-lg bg-light">
           <div class="container"> 
            <a
                href="#"
                class="navbar-brand mb-0 h1">
                    <img 
                    class="d-inline-block akign-top"
                    src="Gambar1.jpg"
                    width="30" height="30" />
                    Beranda 
            </a>
            <div
                class="collapse navbar-collapse"
                id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item-active">
                        <a href="profil.php" class="nav-link active">
                            Profil
                        </a>
                    </li>
                    <li class="nav-item-active">
                        <a href="pelayanan.php" class="nav-link active">
                            Pelayanan
                        </a>
                    </li>
                    <li class="nav-item-active">
                        <a href="kegiatan.php" class="nav-link active">
                            Kegiatan
                        </a>
                    </li>
                    <li class="nav-item-active">
                        <a href="login.php" class="nav-link active">
                            Pengaturan
                        </a>
                    </li>
                </ul>
            </div>
            <form class="d-flex">
                <input type="text" class="form-control me-2">
                <button type="submit" class="btn
                btn-outline-primary"> Search </button>
            </form>
            </a>
          </div>
        </nav>
    </div>
  </header>
</div>

    <!-- Index -->
    
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="" aria-label="Slide 1" _mstaria-label="66157"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" _mstaria-label="66313" class=""></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" _mstaria-label="66469" class="active" aria-current="true"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item">
          <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Tempat penampung: Slide pertama" preserveAspectRatio="xMidYMid slice" focusable="false" _mstaria-label="770796"><title _mstHash="1435343" _mstTextHash="177515">Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em" _mstHash="1876264" _mstTextHash="203385">Slide pertama</text></svg>
    
          <div class="carousel-caption d-none d-md-block">
            <h5 _msthash="1731405" _msttexthash="346216">Label slide pertama</h5>
            <p _msthash="1672944" _msttexthash="3002467">Beberapa konten placeholder yang representatif untuk slide pertama.</p>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false" _mstHidden="A" _mstHiddenAttr="1208194" _mstaria-label="545922"><title _mstHash="1435564" _mstTextHash="177515">Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em" _mstHash="1876576" _mstTextHash="178087" _mstHidden="1">Second slide</text></svg>
    
          <div class="carousel-caption d-none d-md-block" _msthidden="2">
            <h5 _msthash="1731691" _msttexthash="311259" _msthidden="1">Second slide label</h5>
            <p _msthash="1673217" _msttexthash="2464917" _msthidden="1">Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item active">
          <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false" _mstHidden="A" _mstHiddenAttr="1208363" _mstaria-label="508378"><title _mstHash="1435785" _mstTextHash="177515">Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em" _mstHash="1876888" _mstTextHash="155675" _mstHidden="1">Third slide</text></svg>
    
          <div class="carousel-caption d-none d-md-block" _msthidden="2">
            <h5 _msthash="1731977" _msttexthash="282191" _msthidden="1">Third slide label</h5>
            <p _msthash="1673490" _msttexthash="2388945" _msthidden="1">Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden" _msthash="1341483" _msttexthash="76076">Mantan</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden" _msthash="1341756" _msttexthash="58136">Depan</span>
      </button>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <figure class="text-center">
        <h2 class="featurette-heading fw-normal lh-1">Profil desa</span></h2><br>
        <p class="lead">Geneng Duwur adalah desa di kecamatan Gemolong, Sragen, Jawa Tengah, Indonesia. Kantor kelurahan Desa Geneng Duwur terdiri dari beberapa pegawai yang bekerja untuk mengurus desa Geneng Duwur dan beralamatkan di Jln. Sukowati Km. 1,5 Gemolong, Sragen Kode Pos 57274. </p><button class="btn btn-primary btn-lg" type="button">Baca selengkapnya</button>
      </div>
      <div class="col-md-5 order-md-1 text-center">
        <img src="Gambar1.jpg" width="250" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></svg>
      </figure>

      </div>
    </div>

    <div class="container py-4">
      <div class="p-5 mb-4 bg-secondary rounded-3 text-center">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Pelayanan</h1><br>
        <p class="lead">Pemerintah desa memiliki tempat pelayanan untuk menyampaikan kritik, saran maupun aduan. Berikut link yang bisa diakses untuk pelayanan. </p>
        <button class="btn btn-primary btn-lg " type="button" border-whit>Baca selengkapnya</button>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-bg-dark rounded-3"><br>
          <h2>Kegiatan</h2><br><br><br>
          <p class="lead">Kegiatan-kegiatan yang dilaksanan pada desa Geneng Duwur dan dokumentasi dari kegiatan tersebut.  </p>
          <button class="btn btn-outline-light" type="button">Baca selengkapnya</button>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <div id="googleMap" style="width:100%;height:380px;"></div>
        </div>
      </div>
    </div>

    
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
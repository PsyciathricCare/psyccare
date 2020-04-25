<!doctype html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <script src="jquery-3.2.1.min.js"></script>
      
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

      <!-- MY CSS -->
      <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
      <title><?php echo $judul ?></title>

      <link rel="icon" href="<?= base_url(); ?>/assets/logo.png">
      <link rel="stylesheet" href="style.css"> 

    

  </head>

  <body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #F0F8FF;"  >
          <div class="container">
              <a class="navbar-brand" href=<?= base_url(); ?>>   <img src="<?= base_url(); ?>/assets/logo_res.png"> Psyciatric Care </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="nav navbar-nav navbar-right ml-auto nav-tabs">
                      <a class="nav-item nav-link" href="<?= base_url(); ?>">Home</a>
                      <a class="nav-item nav-link" href="<?= base_url(); ?>dokter">Dokter</a>
                      <a class="nav-item nav-link" href="<?= base_url(); ?>pasien">Pasien</a>
                      <a class="nav-item nav-link" href="<?= base_url(); ?>konsultasi">Konsultasi</a>
                      <a class="nav-item nav-link" href="<?= base_url(); ?>penyakit">Penyakit</a>
                      <a class="nav-item nav-link" href="<?= base_url(); ?>obat">Obat</a>
                      <a class="nav-item nav-link" href="#">About</a>
                  </div>
                  <div class="nav navbar-nav navbar-right ml-3">
                      <a href="#" class="btn btn-outline-success mr-3">Login</a>
                      <a href="#" class="btn btn-outline-danger">Daftar</a>
                  </div>
              </div>
          </div>
      </nav>


  </body>
</html>

  
      
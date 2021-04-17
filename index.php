<?php 
include "config/koneksi.php";

$queryProfil = mysqli_query($connect, "SELECT * FROM setting");

//query untuk projek

$queryProject = mysqli_query($connect, "SELECT * FROM project");

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Muhammad Azmi Blog's</title>
  </head>
  <body id="home">
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary shadow-sm fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#projects">Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#blogs">Blogs</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <!--akhir navbar-->

    <!--jumbotron-->
    <?php foreach ($queryProfil as $profil) : ?>
    <section class="jumbotron text-center">
        <img src="assets/img/<?= $profil['logo']; ?>" alt="Gambar User" width="200" class="rounded-circle img-thumbnail">
        <h1 class="display-4"><?= $profil['title']; ?></h1>
        <p class="lead"><?= $profil['tagline']; ?></p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,128L40,149.3C80,171,160,213,240,218.7C320,224,400,192,480,170.7C560,149,640,139,720,154.7C800,171,880,213,960,229.3C1040,245,1120,235,1200,234.7C1280,235,1360,245,1400,250.7L1440,256L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>
    <?php endforeach; ?>

    <!--akhir jumbotron-->

    <!--about-->
    <section id="about">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h4>About</h4>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-md-6 mb-3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima aut voluptatibus nemo fugiat ab laborum odit explicabo esse expedita, quos ex veniam eaque. Fuga voluptate tempore, ut non aspernatur aut!</p>

                </div>
                <div class="col-md-6 mb-3">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse eius distinctio saepe doloremque repellendus totam minima assumenda optio ullam, ipsa repellat qui harum facilis quos, ratione perspiciatis quo cumque aut!</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#6eb5ee" fill-opacity="1" d="M0,256L40,229.3C80,203,160,149,240,144C320,139,400,181,480,202.7C560,224,640,224,720,224C800,224,880,224,960,218.7C1040,213,1120,203,1200,202.7C1280,203,1360,213,1400,218.7L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>

    <!--akhir about-->

    <!--projects-->
    <section id="projects">
        <div class="container">
            <div class="row text-center text-white">
                <div class="col">
                    <h4>Projects</h4>
                </div>
    
            </div>
            <div class="row justify-content-center">
              <?php foreach($queryProject as $project) : ?>
              <div class="col-md-4 mb-3">
                <div class="card">
                  <img src="assets/img/<?= $project['image']; ?>" class="card-img-top" alt="...">
                  <h5 class="text-center mt-3"><?= $project['project_name']; ?></h5>
                  <div class="card-body">
                    <p class="card-text"><?= $project['desc']; ?></p>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
              
              
              
                
               
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,64L48,101.3C96,139,192,213,288,256C384,299,480,309,576,298.7C672,288,768,256,864,234.7C960,213,1056,203,1152,197.3C1248,192,1344,192,1392,192L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
   

    <!--akhir projects-->

    <!--blogs-->
    <section id="blogs">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h4>Blogs</h4>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="assets/img/1.jpg" class="card-img-top" alt="Gambar 1">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="assets/img/1.jpg" class="card-img-top" alt="Gambar 1">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="assets/img/1.jpg" class="card-img-top" alt="Gambar 1">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,128L48,154.7C96,181,192,235,288,261.3C384,288,480,288,576,288C672,288,768,288,864,277.3C960,267,1056,245,1152,229.3C1248,213,1344,203,1392,197.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>

    <!--akhir blogs-->

    <div class="footer bg-primary text-center text-white">
      <p>Created With <i class="bi bi-heart-fill text-danger"></i> by <a href="http://instagram.com"class="text-white fw-bold">Muhammad Azmi</a></p>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
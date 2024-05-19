<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loccars</title>
    <link rel="stylesheet" href="styleloc.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-CclXgg8F5gSlqBCYJf1YvTNV6KXJtnzHDWFT4wz5Gw3FmL3lLuGUKZxP3Cgx4Gs/N7d4jzvkxauFCJwI4g5cWw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: rgb(50, 48, 48);">

  <nav class="navbar navbar-expand-lg navbar-light"
  style="background-color: rgb(50, 48, 48);">
  
  <a class="navbar-brand" href="locindexloc.html" style="color: white;"> <img src="" width="10%">Loccar</a>
  

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
          <li class="nav-item active">
              <a class="nav-link" href="indexloc.html" style="color: white;">Accueil</a>
        </li>
          <li class="nav-item">
              <a class="nav-link" href="voituresloc.html" style="color: white;">Voitures</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="connectionloc.html" style="color: white;">Se connecter</a>
          </li>
      </ul>
  </div>
</nav>

      

    <center>
      <img src="img/loccar.png" alt="" width="80px" alt="" style="border-radius: 10px;" class="flame-shadow1">
      <div class="container">
          <div class="mt-5 text-white">
              <p>
                  Loccars est une agence de location de voitures de luxe offrant une expérience de conduite exceptionnelle. Nous proposons une gamme exclusive de voitures de prestige, allant des supercars emblématiques comme la Ferrari et la Lamborghini aux berlines de luxe allemandes comme la Audi RS6 et la BMW M5, ainsi que des modèles électriques innovants tels que Tesla. Pour louer une voiture.</p>
                  <!--
              <a href="voitures.html" class="btn btn-secondary"></a>-->
          </div>
      </div>
    </center>





      <div class="login-container">
        <h2>Connectez-vous</h2>
        <form action="/auth.php" method="post">
            <label for="email">Email :</label>
            <input type="text" id="email" name="email" required>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Se connecter">
        </form>
    </body>
    
    

    <!-- Footer -->
    <footer class="text-center text-lg- text-white style="background-color: rgb(50, 48, 48);>
      <!-- Section: Social media -->
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
          <!-- Left -->
      </section>
      <!-- Section: Social media -->
    
      <!-- Section: Links  -->
      <section class="">
          <div class="container text-center text-md-start mt-5">
              <!-- Grid row -->
              <div class="row mt-3">
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                      <!-- Content -->
                      <h6 class="text-uppercase fw-bold mb-4">
                          <i class="fas fa-gem me-3"></i>Loccars
                      </h6>
                      <p>
                          Ici votre application pour une location en moins de 5 minutes, en toute tranquilité toute simplicité, LOCCARS votre app pour la location 
                      </p>
                  </div>
    
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                      <!-- Links -->
                      <h6 class="text-uppercase fw-bold mb-4">
                          Liens
                      </h6>
                      <p>
                          <a href="indexloc.html" class="text-reset text-white">Accueil</a>
                    </p>
                      <p>
                          <a href="voituresloc.html" class="text-reset text-white">Nos Voitures</a>
                      </p>
                      <p>
                          <a href="connectionloc.html" class="text-reset text-white">Se connecter</a>
                      </p>
                      <a href="#!" class="text-reset text-white">CGV</a>
                      </p>
                      <p>
                          <a href="#!" class="text-reset text-white">FAQ</a>
                      </p>
                  </div>
                  <!-- Grid column -->
    
                  <!-- Grid column -->
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                      <!-- Links -->
                      <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                      <p><i class="fas fa-home me-3"></i> Annecy, NCY 74000, FR</p>
                      <p>
                          <i class="fas fa-envelope me-3"></i>
                          info@example-loccars.com
                      </p>
                      <p><i class="fas fa-phone me-3"></i><a href="+33450000000" class="text-reset">+ 334 50 00 00 00</p></a>
                      <p><i class="fas fa-print me-3"></i><a href="+33450000000" class="text-reset">+ 334 50 00 00 00</p></a>
                      </div>
                  <!-- Grid column -->
              </div>
              <!-- Grid row -->
          </div>
      </section>
      <!-- Section: Links  -->
    
      <!-- Copyright -->
    
    
    
    <div class="text-reset fw-bold" style="color: white;">Loccars votre app pour la location  <br>
    
        <a href="https://apps.apple.com/fr/app/votre-application/idxxxxxxxxx" target="_blank" style="color: white;"> <img src="img/ios.png" alt="" width="20px"></a>
        <a href="https://play.google.com/store/apps/details?id=votre.package.name" target="_blank" style="color: white;"><img src="img/play.png" alt="" width="20px"></a>
    </div>
    
    
    
      </div>
      <!-- Copyright -->
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    
    </body>
    </html>
    
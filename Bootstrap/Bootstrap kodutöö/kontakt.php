<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row align-items-start">
      <div class="col sm-6">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
        </svg>
        <span>Email@mail.ee</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-headphones" viewBox="0 0 16 16">
          <path d="M8 3a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a6 6 0 1 1 12 0v5a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V8a5 5 0 0 0-5-5"/>
        </svg>
        <span>+372 371 370</span>
      </div>
      <div class="col sm-6 mb-3 text-end">
        <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">
          Est</a>
          <span>|</span>
          <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">
            Eng</a>
            <span>|</span>
            <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">
              Rus</a>
              <span>|</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
              </svg>
      </div>
    </div>
    <div class="row">
      <div class="col sm-6 border-bottom">
        <p class="Logo"></p>
          <H2>SinuNimi</H2>
      </div>
    <div class="col d-flex justify-content-end border-bottom">
      <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="avaleht.html">Avaleht</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tooted</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="teenused.php">Teenused</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontakt.php">Kontakt</a>
            </li>
            <li class="nav-item">
              <button type="button" class="btn btn-primary">Login</button>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    </div>
    <div class="container col-md-6 text-center">
      <H1>Minu oskused</H1>
      <?php
function headmotted(){
  $oskus = array("PHP", "HTML", "CSS", "Bootstrap");
  $varv = array("bg-primary", "bg-secondary", "bg-success", "bg-danger", "bg-warning", "bg-info", "bg-dark");

  echo '<div class="progress mb-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar ' . $varv[array_rand($varv)] . ' " style="width: ' . rand(10,100) . '%">'. $oskus[0] .'</div>
</div>';
echo '<div class="progress mb-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar ' . $varv[array_rand($varv)] . ' " style="width: ' . rand(10,100) . '%">'. $oskus[1] .'</div>
</div>';
echo '<div class="progress mb-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar ' . $varv[array_rand($varv)] . ' " style="width: ' . rand(10,100) . '%">'. $oskus[2] .'</div>
</div>';
echo '<div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar ' . $varv[array_rand($varv)] . ' " style="width: ' . rand(10,100) . '%">'. $oskus[3] .'</div>
</div><br>';
}

headmotted();
?>
</div>
</div>
<div class="container text-center">
<h3>Meie töötajad</h3>

<div class="container">

    <?php
    $dirname = "img/";
    $images = glob($dirname . "*.jpg");
    foreach ($images as $pilt) {

      $nimi = pathinfo($pilt, PATHINFO_FILENAME);

      $nimi = ucfirst($nimi);

      $email = $nimi . "@email.ee";
      
        echo '<div style="display: inline-block; margin-right: 10px;">';
        echo '<img src="' . $pilt . '" alt="#" style="width: 150px; height: 150px;">';
        echo '<div>' . $nimi . '<br>' . $email . '</div>';
        echo '</div>';
    }
    ?>
</div>
</div>
</body>
</html>
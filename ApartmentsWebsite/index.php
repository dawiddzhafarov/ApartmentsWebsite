<?php
$ip_addr =  $_SERVER['REMOTE_ADDR'];

$file = 'test.txt';
file_put_contents($file, $ip_addr,FILE_APPEND);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Strona</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>        
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
		<script>tinymce.init({selector:'.art-editor'});</script>
		<style>
        html {
            position: relative;
            min-height: 100%;
            overflow-y: scroll;
            scrollbar-width: none; /* Firefox */
            -ms-overflow-style: none;  /* Internet Explorer 10+ */
        }
        ::-webkit-scrollbar { /* WebKit */
            width: 0;
            height: 0;
        }
        body {
            margin-bottom: 60px;
            background-image: url('images/image3.jpeg');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .footer {
          position: absolute;
          bottom: 0;
          width: 100%;
          height: 40px;
          line-height: 40px;
          background-color: #636363;
          opacity:0.7;
        }
        .card-header{
          text-align:center;
          font-size:25px;
        }
        .card-body{
          text-align:center; 
          font-size:20px;
        }
        a:link{
          color:black;
        }
        .card{
          background: rgba(99, 99, 99,0.7);
        }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
          <div class="container">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" id="menu-buttons">
              <li class="nav-item nav-link active">
                <a class="nav-link" href="main">Strona główna</span></a>
              </li>
              <li class="nav-item nav-link">
                <a class="nav-link" href="rooms">Pokoje</a>
              </li>
              <li class="nav-item nav-link">
                <a class="nav-link" href="gallery">Galeria</a>
              </li>
              <li class="nav-item nav-link">
                <a class="nav-link" href="drive">Dojazd</a>
              </li>
              <li class="nav-item nav-link">
                <a class="nav-link" href="contact">Kontakt</a>
              </li>
              <li class="nav-item nav-link">
                <a class="nav-link" href="about">O nas</a>
              </li>
              <li class="nav-item nav-link disabled">
                <a class="nav-link" href="SOON">Sprawdź dostępność</a>
              </li>
            </ul>
          </div>
          </div>
        </nav>
        <?php
		    $allowed_pages = ['main', 'gallery', 'contact', 'rooms', 'drive', 'about',];
		    if(isset($_GET['page']) && in_array($_GET['page'], $allowed_pages)){
			    include($_GET['page'] . '.php');
		    } else {
          include('main.php');
        }
		    ?>
        <footer class="footer mt-auto">
          <div class="container align-items-center d-flex justify-content-center">
            <span style="color:white;">© 2021 Copyright:  </span>
            <a href="https://www.linkedin.com/in/dawid-dzhafarov" target="_blank" style="margin-left:10px;">Dawid Dzhafarov</a>

          </div>
        </footer>
    </body>
</html>

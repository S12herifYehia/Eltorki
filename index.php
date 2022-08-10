<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>


    
<nav class="navbar navbar-expand-lg text text-white bg-info" style='margin-bottom:10px;'>
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">Sherif Yehia</a>
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul style='width:85%;' class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://www.youtube.com">Youtube</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mailto:sherifyehia1111@gmail.com">Contact</a>
        </li>
      </ul>
        <form method='POST'><button type='submit' name='layout' class='btn btn-danger'>تسجيل الخروج</button></form>
    </div>
  </div>
</nav>


<?php
$username='sherifyehia1111@gmail.com';
$password='12345';

session_start();

if(isset($_SESSION['user']) && isset($_SESSION['pass']) && isset($_SESSION['login'])){
    if($username === $_SESSION['user'] && $password === $_SESSION['pass']){
        echo '<h1 style=\'text-align:center; margin:30px 0px; \'>Welcome Mr Sherif Yehia</h1>';
        echo '<div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="./img/layer1.jpg" class="card-img-top"  alt="...">
            <div class="card-body">
              <h5 class="card-title">Sherif yehia</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="./img/layer2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Eltorki</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="./img/logo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Sherif yehia</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
        <div class="card h-100">
          <img src="./img/IMG_5479.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ana Eltorki</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
      </div>';
    }else{
        echo '<script>location.replace("login.php")</script>';
        
    }
}

if(isset($_POST['layout'])){
    echo '<script>location.replace("login.php")</script>';
    session_unset();
}

?>

<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>




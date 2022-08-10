<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Sherif Yehia</title>
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    
<nav class="navbar navbar-expand-lg text-white bg-info" style='margin-bottom:10px;'>
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sherif Yehia</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://www.youtube.com">Youtube</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mailto:sherifyehia1111@gmail.com">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php

$username='sherifyehia1111@gmail.com';
$password='12345';

$username2='sallyahmed18@gmail.com';
$password2='28122003';

if(isset($_POST['login'])){
    $getusername=$_POST['email'];
    $getpassword=$_POST['password'];
    if($username === $getusername && $password === $getpassword){
        session_start();
        $_SESSION['user']=$getusername;
        $_SESSION['pass']=$getpassword;
        $_SESSION['login']=true;
        echo '<script>location.replace(\'index.php\')</script>';
    }
    
    if($username2 === $getusername && $password2 === $getpassword){
        session_start();
        $_SESSION['user']=$getusername;
        $_SESSION['pass']=$getpassword;
        $_SESSION['login']=true;
        echo '<script>location.replace(\'sally.php\')</script>';
    }

    else{
        echo '<div class="alert alert-danger text-center" role="alert">
         تم تسجيل بيانات غير صحيحه ياعم التركي فووووووووق
      </div>';
    }
}

?>

<div class="container" style='margin-top:20px;'>
<form method='POST'>
    userName: <input type="email" name="email" class="form-control">
    <br>
    password: <input type='password' name='password' class="form-control">
    <button type='submit' name='login' class="btn btn-warning" style='margin-top:20px;'>Login</button>

</form>

</div>




<!-- JavaScript Bundle with Popper -->
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
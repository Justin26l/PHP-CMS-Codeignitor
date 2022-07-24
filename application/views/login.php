<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant Back End Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        html{ height: 100%; }
        body {  display: flex;  align-items: center;  padding-top: 40px;  padding-bottom: 40px;  background-color: #f5f5f5;}
        .form-signin {  max-width: 330px;  padding: 15px;}
        .form-signin .form-floating:focus-within {  z-index: 2;}
        .form-signin input[type="email"] {  margin-bottom: -1px;  border-bottom-right-radius: 0;  border-bottom-left-radius: 0;}
        .form-signin input[type="password"] {  margin-bottom: 10px;  border-top-left-radius: 0;  border-top-right-radius: 0;}
    </style>
  </head>
  <body>
    
<main class="form-signin w-100 m-auto">
  <form method="POST" action="<?=base_url('login_submit')?>">    
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    <?php
    if(isset($_GET['invalid'])) {
      echo '<div class="alert alert-danger">Invalid email or password</div>';
    }
    ?>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php if( isset($email)&&!empty($email)) { echo $email; }?>">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="Password" value="<?php if( isset($pwd)&&!empty($pwd)) { echo $pwd; }?>">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" name="remember" value="1" <?php if(isset($email)&&!empty($email)) { echo "checked"; }?>> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
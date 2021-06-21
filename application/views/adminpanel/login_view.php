<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/5.0/examples/sign-in/signin.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <form class="form-signin" action="<?=  base_url(). 'admin/login/login_post'  ?>" method="post">
<?php   
      if($error != "NO_ERROR"){
        echo'<div class="alert alert-danger" role="alert" >';
        echo "$error";
        echo'</div>';
      }
    ?>

    
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" name="user_name" class="form-control" id="floatingInput" placeholder="enter user name">
      <label for="floatingInput">User Name</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  </form>
    
  </body>
</html>
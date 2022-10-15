<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= BASE_URL ?>/user/store" method="POST">
        <div class="mb-3">
            <div class="form-label">First Name</div>
            <input type="text" class="form-control" placeholder="User first name..." name="first_name">               
        </div>
        <div class="mb-3">
            <div class="form-label">Last Name</div>
            <input type="text" class="form-control" placeholder="User last name..." name="last_name">
        </div>
        <div class="mb-3">
            <div class="form-label">Username</div>
            <input type="text" class="form-control" placeholder="User username..." name="username">
        </div>
        <div class="mb-3">
            <div class="form-label">Email</div>
            <input type="email" class="form-control" placeholder="User email..." name="email">
        </div>
        <div class="mb-3">
            <div class="form-label">Password</div>
            <input type="password" class="form-control" placeholder="User password..." name="password">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</body>
</html> -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Signin Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    

    

<link href="<?= BASE_URL ?>/assets/css/bootstrap.min.css" rel="stylesheet">

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

    
    <!-- Custom styles for this template -->
    <link href="<?= BASE_URL ?>/assets/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form action="<?= BASE_URL ?>/user/registerprocess" method="post">
    <img class="mb-4" src="<?= BASE_URL ?>/assets/img/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please Sign Up</h1>
    <?php if($data['message'] !== '') : ?>
      <div class="alert alert-danger" role="alert">
        <?= $data['message'] ?>
      </div>
    <?php endif; ?>
    <div class="form-floating">
      <input type="email" class="form-control input-email" id="email" name="email" placeholder="Enter your email" required>
      <label for="email">Email</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control rounded-0" id="username" name="username" placeholder="Enter your username" required>
      <label for="username">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control rounded-0" id="password" name="password" placeholder="Enter your password" required>
      <label for="password">Password</label>      
    </div>
    <div class="form-floating">
      <input type="password" class="form-control rounded-0" id="verify_password" name="verify_password" placeholder="Enter your verify password" required>
      <label for="verify_password">Verify Password</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control rounded-0" id="first_name" name="first_name" placeholder="Enter your first name" required>
      <label for="first_name">First Name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control input-lastname" id="last_name" name="last_name" placeholder="Enter your last name" required>
      <label for="last_name">Last Name</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
    <p class="my-3">Already Have an Account? <a href="<?= BASE_URL ?>/user/loginview">Sign In</a></p>

    <p class="mt-3 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
</main>
 
  </body>
</html>

<!DOCTYPE html>
 <!-- require_once('./setup.php'); ?> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="icon" href="./Assets/img/loginicon.svg">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./Css/style.css">
    <link rel="stylesheet" href="./Css/bootstrap.css">
</head>
<body>
<?php include_once"./includes/header.php"; ?>
    
    <div class="d-flex justify-content-center align-items-center mt-4">
    
        <div class="d-flex flex-column justify-content-around align-items-center gap-5 flex-md-row shadow p-3 mb-5 bg-body rounded w-75 h-100 py-5">
            <div class="img">
                <img src="./Assets/img/login.svg" alt="" width="300" class="d-none d-md-block"> 
            </div>
            <form action="./includes/main.php" method="POST" class="" id="login">
                <h4 class="text-center">Login</h4>
                <p class="vide-msg mt-2 text-center alert-danger border-3 text-danger"><?php if(isset($_GET['error']))echo "username or password not correct"; ?></p>
                <div class="input-group mt-4">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" name="username" id="username" value="<?php ?>">
                </div>
                <p class="valid text-danger"></p>
                <div class="input-group flex-nowrap mt-4">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping" name="pass" id="pass">
                </div>
                <p class="valid text-danger"></p>
                <div class="mt-3 form-check">
                    <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                  </div>
                <button type="submit" name="submitLogin" class="btn btn-primary mt-3 w-100">Login <i class="fas fa-sign-in"></i></button>
                <p class="mt-3">No Account <a href="./sign-up.php">Sign up</a> here</p>
                <div class="d-flex justify-content-center gap-2">
                  <button class="btn btn-fb"><i class="fab fa-google me-2"></i>google</button>
                  <button class="btn btn-go"><i class="fab fa-facebook-f me-2"></i>facebook</button>
                </div>
                    </form>
        </div>
        <script src="./Js/loginvalidation.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    </div>
</body>
</html>
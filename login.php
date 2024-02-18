<?php
 $err_field = $err_user = $err_pass = "";
 $user = $password = "";
 if(isset($_POST['login'])){
    
   $user = htmlspecialchars($_POST['user_id']);
   $password = htmlspecialchars($_POST['password']);
   if(empty($user) || empty($password)){
     $err_field = "* All the field is required *";
   }
   

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank of America</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container p-3">
        <section>
            <nav class="navbar navbar-expand-lg bg-body-white">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">BANK OF AMERICA <i class="fa-solid fa-flag-usa text-danger fs-5"></i></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#"><i class="fa-solid fa-lock"></i> <span class="fw-semibold text-dark">Secure Area</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">: En espanol</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container-fluid logB p-3">
                <h5 class="text-white fw-semibold">Log In to Online Banking</h5>
            </div>
        </section>


        <section>
            <div class="row">
                <div class="col-md-4 px-5 pt-5">
                    <form action="" method="post" class="px-3">
                        <div class="text-danger fw-bold">
                            <?= $err_field ?>
                        </div>
                        <div class="d-flex flex-column">
                            <label for="userID" class="fw-bold textC">User ID</label>
                            <div class="text-danger"></div>
                            <input type="text" name="user_id" value="<?= $user ?>">
                        </div>
                        <div class="d-flex">
                            <input type="checkbox" name="check_user" id="">
                            <label for="checkbox" class="ms-1 fw-semibold">Save this User ID <span><i class="fa-solid fa-circle-exclamation text-primary"></i></span></label>
                        </div>
                        <div class="d-flex flex-column mt-5">
                            <label for="userID" class="fw-bold textC">Password</label>
                            <div class="text-danger"></div>
                            <input type="password" name="password" >
                            <a href="#" class="mt-3 text-primary fw-semibold">Forgot your Password?</a>
                        </div>
                        <button type="submit" class="btn btnL rounded-md mt-3" name="login">
                            <span><i class="fa-solid fa-lock"></i> </span> Log In
                        </button>
                    </form>
                </div>
                <div class="col-md-4 ">
                    <div class="seCol">
                        <h4 class="textC text-center mt-5">Stay connected with our app</h4>
                        <div class="row ms-2 py-3 px-1 ">
                            <img src="img/iphone-removebg.png" class="img-fluid col-md" alt="">
                            <div class=" col-md my-auto ms-1">
                                <p class="fw-semibold">Secure, convenient banking anytime</p>
                                <button class="btn btnA">Get The App</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row px-5 mt-5 ms-md-5">
                        <div class="col">
                            <h6 class="bhead fw-bold textC">Login help</h6>
                            <a href="#" class="textS">Forgot ID/Password?</a> <br>
                            <a href="#" class="textS">Problem logging in?</a>
                        </div>
                        <div class="col">
                            <h5 class="bhead fw-bold textC mt-5">Not using Online Banking?</h5>
                            <a href="#" class="textS">Enroll now</a><br>
                            <a href="#" class="textS">Learn more about Online Banking</a><br>
                            <a href="#" class="textS">Service Agreement</a>
                        </div>
                    </div>

                </div>
        </section>

        <footer class="bg-light p-3 mt-3 container-fluid ps-5 pt-4">
           <h6>
           <i class="fa-solid fa-lock"></i> <span class="fw-semibold text-dark">Secure Area</span>
           </h6>
           <a href="#"> Privacy |  </a>
           <a href="#">Security |  </a>
           <a href="#">Your Privacy Choices</a>
           <div class="mt-3">
            <p>Bank of America, N.A. Member FDI
                <a href="#">Equal Housing Lenader</a>
            </p>
            <p>&copy;2023 Bank of America Corporation</p>
           </div>
        </footer>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
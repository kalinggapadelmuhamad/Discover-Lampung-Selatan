<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Discover Lamsel</title>
    <link href="../assets/img/logo/logo.png" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <div class="login">
        <div class="container d-flex justify-content-center">
            <div class="row align-items-center">
                <div class="col-md-12 login-card mx-auto py-4 px-4">
                    <img class="float-start me-2 img-fluid" width="42" src="assets/img/Galeri/logo.png" alt="">
                    <div class="float-left">
                        <p class="lh-1">
                            <span class="fw-semibold fs-4 d-block">Discover</span>
                            <span class="fw-semibold fs-4 d-block">Lampung Selatan</span>
                        </p>
                    </div>
                    <p class="fw-light mt-4">use credentials to access your account.</p>
                    <form action="logincek.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="username" name="email" required>
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput2" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="exampleFormControlInput2" placeholder="********" name="password" required>
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="bi-eye-slash-fill" id="togglePassword"></i></button>
                            </div>
                        </div>
                        <button class="btn btn-ms btn-primary" name="login">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php

    if (isset($_GET['error'])) {
        echo '<script>alert("login gagal")</script>';
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
        //collect data by id
        var password = document.getElementById("exampleFormControlInput2");
        var toggler = document.getElementById("togglePassword");

        //set event listener
        toggler.addEventListener("click", hideShowPassword);

        //hideShowPassword main
        function hideShowPassword() {

            console.log(password.type);

            //chech password type
            if (password.type === "password") {

                password.setAttribute("type", "text");
                toggler.classList.remove("bi-eye-slash-fill");
                toggler.classList.add("bi-eye-fill");

            } else {

                password.setAttribute("type", "password");
                toggler.classList.remove("bi-eye-fill");
                toggler.classList.add("bi-eye-slash-fill");

            }
        }
    </script>
</body>

</html>
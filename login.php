<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    require_once 'path.php';
    include(ROOT_PATH . "/app/controllers/users.php");
    include(ROOT_PATH . "/app/includes/css.php");

    ?>
    <title>FrankNaija - Login</title>

    <style>
        .form-g {
            background-color: #fff;
            box-shadow: 2px 2px 5px #ddd;
            padding: 1em 2em;
        }

        .form-control {
            border-radius: 0 !important;
            padding: 20px !important;
            margin-bottom: 10px !important;
        }

        .top h4 {
            background-color: #242424;
            color: white;
            text-align: center;
            padding: .6em;
            margin: 0 !important;
        }

        .btn {
            background-color: #242424;
            color: white;
            border-radius: 0 !important;
        }

        .btn:hover {
            color: orangered !important;
            border-radius: 0 !important;
        }

        .form-error {
            background-color: #ffb9d1;
            padding: 10px 10px 0px 10px;
            border: 2px solid #491217;
            margin-bottom: 1em;
        }

        @media screen and (min-width:800px) {
            .container {
                width: 70%;
            }
        }
    </style>

</head>

<body>
    <!-- HEADER -->
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <!-- /HEADER -->

    <div class="container" style=" margin:2em auto;">

        <div>
            <div class="form ">
                <div class="top">
                    <h4>Register</h4>
                </div>

                <form method="POST" class="form-g" action="login.php" novalidate class="form_sec">

                    <?php include(ROOT_PATH . "/app/helpers/formerrors.php") ?>

                    <div>
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" value="<?php echo $email ?>" id="email" name="email">
                    </div>


                    <div>
                        <label for="Password">Password *</label>
                        <input type="password" class="form-control" value="<?php echo $password ?>" id="Password" name="password">
                    </div>

                    <div class="form-group mb-0">
                        <input type="submit" name="login-btn" value="sign in" class="btn">
                    </div>

                    <div>
                        <small style="font-size: 11px;">Do not have an account? <a href="<?php echo BASE_URL . '/register.php' ?>">Sing Up</a></small>
                    </div>
                </form>

            </div>
        </div>

    </div>

    <div class="container" style="background-color: #242424; width:100%">
        <div class="footer-bottom row">
            <div class="col-md-6 col-md-push-6">
                <ul class="footer-nav">
                    <li><a style="color:gray" href="index.html">Home</a></li>
                    <li><a style="color:gray" href="about.html">About Us</a></li>
                    <li><a style="color:gray" href="contact.html">Contacts</a></li>
                    <li><a style="color:gray" href="#">Advertise</a></li>
                    <li><a style="color:gray" href="#">Privacy</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-md-pull-6">
                <div class="footer-copyright">
                    <a href="index.html" class="logo">
                        <h1 style='color:white'>Frank<span>Naija</span></h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
  
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.stellar.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
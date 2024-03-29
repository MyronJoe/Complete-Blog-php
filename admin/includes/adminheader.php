<?php 
    require_once(ROOT_PATH . "/app/includes/session.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrankNaija - Dashboard</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="icon" href="../../assets/images/Mj-fav-icon.png" />
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <style>
        .sidebar1 ul a {
            height: 10% !important;
        }

        .err-msg {
            width: 80%;
            position: absolute;
            z-index: 200;
            left: 0;
            right: 0;
            margin: auto;
            top: 80px;
        }

        .submenu ul {
            display: none;
            position: absolute;
            background-color: white;
            padding: 5px 10px 5px 0px;
            transition: 2s ease-out;
        }

        .submenu ul li a {
            color: #040820;
            display: inline-block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .submenu ul li a:last-child {
            margin-bottom: 0px;
        }

        .submenu ul li a:hover {
            color: orangered
        }

        .handler {
            position: relative;
        }

        .handler:hover .submenu ul {
            display: block;
        }

        
    </style>
</head>

<body>
    <nav style="display: flex;">
        <div class="logo">
            <h3><a href="<?php echo BASE_URL . '/' ?>">FrankNaija</a></h3>
        </div>
        <div class="user">
            <ul>

                <li class="handler mt-2">
                    <a href="#"><span class="fa fa-user mr-1"></span>Joe</a>

                    <div class="submenu">
                        <ul style="top:30px; right:0px">
                            <li><a href="<?php echo BASE_URL . '/logout.php' ?>"><span style="display: inline; margin-right:5px;" class="fa-solid fa-arrow-right-from-bracket"></span>Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="err-msg">
        <?php if (isset($_SESSION["message"])) : ?>
            <div style="padding: 1em;" class="<?php echo $_SESSION["type"]; ?>">
                <p><?php echo $_SESSION["message"]; ?></p>

                <?php
                unset($_SESSION["message"]);
                unset($_SESSION["type"]);
                ?>
            </div>
        <?php endif; ?>
    </div>
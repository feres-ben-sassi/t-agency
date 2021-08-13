<?php
session_start();
include("functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Travel Bird : Home</title>
    <link rel="stylesheet" href="styles/style.css" media="all">
    <style>
    .adminbtn {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 1px 2px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        cursor: pointer;
        -webkit-transition-duration: 0.4s;
        /* Safari */
        transition-duration: 0.4s;
        float: right;
        margin-top: 12px;
        margin-left: 2px;
    }

    .adminbtn:hover {
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    }
    </style>
</head>

<body>
    <!--Main container starts-->
    <div class="main_wrapper">
        <!--Header starts-->
        <?php include 'includes/header.php'; ?>
        <!--Header ends-->
        <!--Navbar starts-->
        <?php include 'includes/navbar.php'; ?>
        <!--Navbar ends-->
        <!--Content starts-->
        <div class="content_wrapper">
            <!--left-sidebar starts-->
            <?php include "includes/left-sidebar.php"; ?>
            <!--left-sidebar ends-->
            <div id="content_area">
                <?php cart(); ?>
                <div id="shopping_cart">
                    <span style="float: right;font-size: 18px;padding: 5px;line-height: 40px;">
                        <?php
                        if (isset($_SESSION['customer_email'])) {
                            echo "<b>Welcome: </b>" . $_SESSION['customer_email'] . "<b style='color: yellow;'> Your</b>";
                        } else {
                            echo "<b>Welcome Guest:</b>";
                        }
                        ?>
                        <b style="color: yellow;">Shopping Cart-</b> Total Items: <?php total_items(); ?>
                        Total Price: <?php total_price(); ?> <a href="cart.php" style="color: yellow;">Go to Cart</a>
                        <?php
                        if (!isset($_SESSION['customer_email'])) {
                            echo "<a href='checkout.php' style='color: orange;'>User Login</a>";
                        } else {
                            echo "<a href='logout.php' style='color: orange;''>Logout</a>";
                        }
                        ?>
                        <button class="adminbtn"><a style="text-decoration: none; color: #ffffff;"
                                href="admin_area/index.php">Admin Login</a></button>
                    </span>
                </div>
                <div id="packages_box">
                    <?php getPack(); ?>
                    <?php getCatPack(); ?>
                    <?php getTypePack(); ?>
                </div>
            </div>
        </div>
        <!--Content ends-->
        <!--footer starts-->
        <?php include "includes/footer.php"; ?>
        <!--footer ends-->
    </div>
    <!--Main container ends-->
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alita Hotel</title>
    <!-- css external Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" media="screen">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/html2canvas.min.js"></script>    
    <style>
        .txt-center {
            text-align: center;
        }
        input[type=checkbox] {
            width: 25px;
            margin: 20px;
            cursor: pointer;
        }
        input[type=checkbox]:before {
            content: "";
            width: 50px;
            height: 50px;
            border-radius: 5px;
            -webkit-border-radius: 5px; /* Safari 3-4, iOS 1-3.2, Android 1.6- */
            -moz-border-radius: 5px; /* Firefox 1-3.6 */
            display: inline-block;
            vertical-align: middle;
            text-align: center;
            border: 3px solid #ff9800;
            background-color: #cfa8a8;
        }

        input[type=checkbox]:checked:before {
            background-color: Green;
        }
        input[type=checkbox]:disabled:before{
            background-color: red;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#"><!--Navbar-->
            <img src="<?php echo base_url(); ?>assets/images/logo/logo.jpg" alt="Alita Hotel">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url(); ?>index.php">Home <!--<span class="sr-only">(current)</span>--></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>index.php/WelcomeAlita/tentang_kami">Tentang Kami</a>
            </li>         
            </ul>
             
            <?php
            if (isset($login['username'])) {
                echo "
                <ul class='navbar-nav navbar-right'>
              <li class='nav-item'>
                ";
                echo $loginsesion['username'];
                echo "</li>
          </ul>";
            } else {
              
                echo "
              <ul class='navbar-nav navbar-right'>
              <li class='nav-item'><a class='nav-link' href='index.php/WelcomeAlita/login'>Login</a></li>
          </ul>
              ";

            }
            ?>
            
        </div>
    </nav>
  
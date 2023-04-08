
<?php

@include 'config.php';

session_start();


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMER ARENA</title>
    <script src="https://kit.fontawesome.com/dfc3a35a22.js" crossorigin="anonymous"></script>
    <link rel="icon" href="icon/favicon.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="gamestyle.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>

        <nav class="navbar navbar-expand-lg navbar-dark ">

            <div class="brand"> <a class="navbar-brand" href="http://localhost/web/index.php"><img src="icon/icon.png" class="icon">GAMER ARENA</a></div>
    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown"
                aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
    
                <ul class="navbar-nav  ms-auto">
                    <li class="navbar-item1">
                        <div class="item1">   
                            <?php if( isset($_SESSION['user_name']) && !empty($_SESSION['user_name']) )
                             {
                             ?>
                            <?php }else{ ?>
                            <a class="nav-link" href="http://localhost/web/game/login.php">LOGIN</a>
                            <?php } ?>
                        </div>
    
                    </li>
                    <li class="navbar-item2">
                        <div class="item2"><a class="nav-link" href="">CONTACT</a></div>
                    </li>
                    <li class="navbar-item3">
                        <div class="item3"><a class="nav-link" href="">💓MY GAMES</a></div>
                    </li>
    
                    <?php if( isset($_SESSION['user_name']) && !empty($_SESSION['user_name']) )
                             {
                             ?>
                              <li class="navbar-item4 dropdown">
                        <div class="item4">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user"></i>
                            </a>
    
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                               <h3>welcome <span><?php  if (isset($_SESSION['user_name'])) : ?>
                             
                               
                                 
                                  <?php echo $_SESSION['user_name']; ?>
                         
                     
                                  <?php endif ?></span></h3>
                                <li><a class="dropdown-item nav-link" href="#">highscore</a></li>
                                <li> <a class=" dropdown-item nav-link" href="http://localhost/web/logout.php">LOGOUT</a></li>
                            </ul>
                        </div>
                    </li>
                            <?php }else{ ?>
                            
                            <?php } ?>
                        
    
    
    
                </ul>
    
            </div>
        </nav>
    <div class="bg">
        <iframe src="https://www.crazygames.com/embed/punchers" class="game" style="width: 70%; height: 80%;"
            frameborder="0" allow="gamepad *;"></iframe>

    </div>
</body>

</html>

<?php
session_start();
require_once('dbconfig/config.php');
//unset($_SESSION['username']);
//session_destroy();
//header('Location:paws.php');
//phpinfo();
//echo $_SESSION['username'];
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
   <title></title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top ">
        <a class="navbar-brand " href="paws.php">Paws Foundation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               
               <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#cards">Partners</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="https://halopets.com/">Visit Halopets.com</a>
                </li>
         <!--  <li class="nav-item dropdown ml-auto">
                    <a class="nav-link dropdown-toggle ml-auto" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>  -->
                </li> 
               
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php" class="text-white">LOGIN / SIGN-UP </a></li>
                
            </ul>
          
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img1.jpg" style="height:450px;" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="cat.jpg" style="height:450px;"alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img3.jpg" style="height:450px;" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</header>



    <div class="card-group mt-4" id="cards">
        <div class="card mr-3">
            <img class="card-img-top " src="gg.png" alt="Card image cap">
            <div class="card-body">
               
                <p class="card-text">A non-profit organization that brings together a diverse group (farmers, scientists, retailers, manufacturers and animal advocates) with the common goal of improving farm animal welfare standards around the world.</p>
            </div>
            <div class="card-footer">
       <a class="btn bg-success " style="width:100%;" href="https://greatergood.com/">Visit Site</a>
            </div>
        </div>
        <div class="card mr-3">
            <img class="card-img-top" src="ff.png" alt="Card image cap">
            <div class="card-body">
                
                <p class="card-text">TToday, the Freekibble Network reaches over 500,000 passionate pet-lovers, with over 140,000 daily combined visitors from 157 countries. This loyal community has helped us feed and care for 100’s of thousands of animals in need.</p>
            </div>
            <div class="card-footer">
                <a class="btn bg-success " style="width:100%;" href="https://www.freekibble.com">Visit Site</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="hh.png" style="height:300px" alt="Card image cap">
            <div class="card-body">
               
                <p class="card-text">THolistic dog food and cat food that’s responsibly made with real WHOLE meat, poultry, or fish, and no “meat meal” of ANY kind</p>
            </div>
            <div class="card-footer">
                <a class="btn bg-success " style="width:100%;" href="https://halopets.com/where-to-buy/international">Visit Site</a>
            </div>
        </div>
    </div>

    

    <div class="jumbotron mt-3 "style="background-color:lightskyblue">
        <h1 class="display-4">Hello Donor!</h1>
        <p class="lead">Wondering where your donated money goes???? Don't worry it's safe in Paws Foundation.</p>
        <hr class="my-4">
        
        <button class="btn btn-primary bg-success" type="button" data-toggle="collapse" data-target="#collapseExample">
        Know More
    </button>
         <button class="btn btn-primary bg-success" type="button"><a  style="color:white;"href="login.php">
        Donate</a>
    </button>

    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            Your donation to Paws Foundation goes straight to work helping tens of thousands of animals – both at the Sanctuary and through outreach and animal rescue programs all across the country.
    </div>
    



</div>
        </div>

<div style="width:100%; height:300px; background-color:lightcoral" class="shadow">

    <h1 class="text-center text-white font-weight-bold" style="font-family:Courier New, Courier, monospace;">ABOUT</h1>

    <p class="text-black text-center"style="font-size:22px;">This is an organisation where volunteers across the country are involved rescuing abandoned pets ans finding them a home and nurturing them.It runs fully on donations recieved from various people all over the world.  </p>

    <div class="row mt-5" id="about">
        <div class="col-6 text-center shadow-lg" style="font-size:22px;background-color:whitesmoke;font-family:Courier New, Courier, monospace;">
            <span class="font-weight-bold">OFFICE:</span><br />
            Karunya University<br />
            Coimbatore-641114.
        </div>
         <div class="col-6 text-center shadow-lg" style="font-family:Courier New, Courier, monospace;font-size:22px;">
           <span class="font-weight-bold">CONTACT US AT:</span> <br />
            +91-999999999<br />
             paws@gmail.com
        </div>




    </div>


</div>
<footer>
    <p class="text-center">Handcrafted with &hearts; by ALTHAAF </p>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

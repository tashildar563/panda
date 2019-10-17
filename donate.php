
<?php
session_start();
require_once('dbconfig/config.php');
if(!isset($_SESSION['username']))
    header('location:paws.php');
//phpinfo();
?>


<html>
<head>
    <meta charset="utf-8" />
     <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
<body>
<?php
        if(isset($_POST['donate']))
{
    $donation=$_POST['donation'];
    $_SESSION['donation']=$donation;
    $name=$_SESSION['username']; 
    $query = "select money from user where username='$name'";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_array($result);
    $cash = $row['money'] + $donation;
    
  //while($row = mysqli_fetch_array($result))
  //{
  //$_SESSION['money']=$result['money'];
   
  //}
   
   
   $query1 = "update user set money = $cash where username='$name'";
   $result1 = mysqli_query($con,$query1);
   if($result1==true){
       echo "true";

   }
   else{
       echo mysqli_error($con);
   }
  }

 ?>
        
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top ">
        <a class="navbar-brand " href="homepage.php">Paws Foundation</a>
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
                <li><h5 class="text-light"> <?php echo $_SESSION['username']; ?><h5></li>
                
            </ul>
          <!DOCTYPE html>
          <html lang="en">
          <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <meta http-equiv="X-UA-Compatible" content="ie=edge">
              <title>Document</title>
          </head>
          <body>
              
          </body>
          </html>
        </div>
    </nav>
    
    <div class=" jumbotron mt-3 pl-0"style="background-color:yellowgreen;padding-bottom:185px;">
        <h3 class="display-5">Hello Donor!</h3>
        <hr class="my-4">
       <div class="container">
  
  <form action="donate.php" method="post">

      <p class="mx-auto">You can donate here:</p>
   
    <div class="form-group">
    
     <input type="text" name="donation"class="form-control" placeholder="Enter your amount" id="pwd">
    </div>

</div>
     <div class="mx-auto"  style="padding-left:650px;">
         <button class="btn btn-primary bg-success mx-auto " type="submit" name="donate">
        Donate
    </button>
    </form >
</div>
            <div class="bg-dark row mt-5 p-5 pl-5">
            <div class="col-6 text-center shadow-lg" style="font-size:22px;background-color:whitesmoke;font-family:Courier New, Courier, monospace; padding-top:30px;">
            <span class="font-weight-bold"> 
            
           
            TOTAL AMOUNT DONATED:&#8377 <?php if(isset($cash)){ echo $cash;} ?>
           
            
            
        </div>
       <div class="col-6 text-center shadow-lg" style="font-size:22px;padding-top:25px;font-family:Courier New, Courier, monospace;">
            <p class="font-weight-bold text-light my-auto">THANK YOU FOR THE SUPPORT!</p><br />
           
        </div>
          
     
        </div>
        <button class="btn btn-primary bg-warning" type="button"><a  style="color:white;"href="homepage.php">
        GO BACK FOR LOGOUT</a>
    </button>
</div>
        
     





       









<div style="padding-bottom:5px;height:50px;">
    <p class="text-center pb-3 ">Handcrafted with &hearts; by ALTHAAF </p>

</div>












<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
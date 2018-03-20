<! DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../logo/download.png"><!--used for the tittle icon -->
    <title>ACTIVE ENTERPRENUER</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="startup.css" rel="stylesheet" type="text/css">
    
</head>
<body >
    
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        
        <div class="container-fluid">
            
            <div class="navbar-header">
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse1" aria-controls="navbar-collapse1" aria-expanded="false" aria-label="Toggle navigation">
                    
                    <span class="navbar-toggler-icon"></span>
                </button><!-- button type -->
                
                <a class="navbar-brand" href="Home.php">ACTIVE<strong> ENTERPRENUER</strong></a>
                
            </div><!-- navbar header-->
            
            <div class="collapse navbar-collapse" id="navbar-collapse1">
                <ul class="navbar-nav "><!-- ml-md-auto is for the margin   purpose -->
                        <li><a style="text-align:center;" class="nav-link" href="Home.php">Home</a></li>
                    <li><a class="nav-link" href="about.php">About Us</a></li>
                    <li><a class="nav-link" href="condition.php">Terms And Condition</a></li>
                        
                </ul><!-- navbar-right -->    
              
                <ul class="navbar-nav flex-row ml-md-auto "><!-- ml-md-auto is for the margin   purpose -->
                <?php
                    if($_SESSION['loggedinuser']){
                ?> 
                        
                    <li><a class="nav-link" href="logout.php">Logout</a></li>
                <?php
                    } else {
                ?>    
                    <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Signup </a>
                         
                        <ul class="dropdown-menu " aria-labelledby="navbarDropDown">
                            <li ><a style="right:auto;" class="dropdown-link" href="signup_user.php">As User</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-link" href="signup_volunteer.php">As Volunteer </a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-link" href="signup_investor.php">As Investor</a></li>
                        </ul><!-- dropdown menu-->
                    </li>   
                    <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login </a>
                         
                        <ul class="dropdown-menu" aria-labelledby="navbarDropDown">
                            <li ><a class="dropdown-link" href="login_user.php">As User</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-link" href="login_volunteer.php">As Volunteer </a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-link" href="login_investor.php">As Investor</a></li>
                        </ul><!-- dropdown menu-->
                    </li>

                <?php
                    }
                ?>
                </ul><!-- navbar-right -->
                
               
                
                
            </div><!-- navabr navbar-collapse -->
            
        </div><!-- container-fluid-->
        
    </nav><!-- navbar-default-->
    
    
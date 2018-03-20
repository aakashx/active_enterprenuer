<?php
    include('connection.php');

    if(isset($_POST["add"])){
        
        //build a function to validate the data
        function validateformdata($formdata){
            $formdata = trim(stripslashes(htmlspecialchars($formdata)));
            return($formdata);
        }
        
        //check to see if function are empty
        //create a variable with from data
        //wrap the data around our function
        $username=$password=$email=$bio="";
        
        if(!$_POST["username"]){
            $name_error = "Please enter the username<br>";
        }else{
            $username = validateformdata($_POST["username"]);
        }
        if(!$_POST["password"]){
            $password_error = "Please enter the passowrd<br>";
        }else{
            $password = validateformdata($_POST["password"]);
            $password = password_hash($password,PASSWORD_DEFAULT);
            echo (password_hash(password,PASSWORD_DEFAULT));
        }
        if(!$_POST["email"]){
            $email_error = "Please enter the Email<br>";
        }else{
            $email = validateformdata($_POST["email"]);
        }
        if(!$_POST["bio"]){
            $bio_error = "Please enter the bio<br>";
        }else{
            $bio = validateformdata($_POST["bio"]);
        }
        
        //check to see if the each variable has the data
        if( $username && $password && $email && $bio){
            
            $query = "INSERT INTO users(id,username,password,email,signup_time,feedback) VALUES (NULL, '$username' , '$password' ,'$email', CURRENT_TIMESTAMP , '$bio' )";
        
            if(mysqli_query($conn,$query)){
                echo '<script type="text/javascript">window.alert("new record inserted");        </script>';
            }else{
                echo"Error" .$query."<br>".mysqli_error($conn);
            }
        }
        
    }
    
    /* my sql query
    INSERT INTO users(id,username,password,email,signup_time,biography)VALUES(NULL,'jacksonamith,'jackson','jack@email.com,CURRENT_TIMESTAMP,'Hello! I\'m jack.this is my bio')
    */    
?>

<! DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--<link rel="icon" href="../../../../favicon.ico">--><!--used for the tittle icon -->
    <title>MySql Insert</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   

</head>

<body>

    <div class="container">
        <h1>MySql Insert</h1>

        <h4>enter the require information</h4>
        <p class="text-danger">* Required Field</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <!-- warning text-->
            <small class="text-danger">*<?php echo $name_error; ?></small>
            <input type="text" placeholder="username" name="username">
            <br><br>
            
            <small class="text-danger">*<?php echo $password_error;?></small>
            <input type="password" placeholder="password" name="password">
            <br><br>
            
            <small class="text-danger">*<?php echo $email_error; ?></small>
            <input type="email" placeholder="email" name="email">
            <br><br>
            
            <small class="text-danger">*<?php echo $bio_error; ?></small>
            <textarea rows="4" placeholder="bio" name="bio"></textarea>
            <br><br><br>
            
            <input type="submit" name="add" value="add_entry">
        </form>

    </div><!-- container-->

    <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
        <!--<script src="bootstrap\js\bootstrap.min.js"  ></script>-->
</body>
</html>

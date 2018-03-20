<?php
    include('includes/connection.php');

    if(isset($_POST["signup"])){
        
        //build a function to validate the data
        function validateformdata($formdata){
            $formdata = trim(stripslashes(htmlspecialchars($formdata)));
            return($formdata);
        }
        
        //check to see if function are empty
        //create a variable with from data
        //wrap the data around our function
        $username=$password=$email=$phone="";
        
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
            
        }
        if(!$_POST["email"]){
            $email_error = "Please enter the Email<br>";
        }else{
            $email = validateformdata($_POST["email"]);
        }
        if(!$_POST["phone"]){
            $phone_error = "Please enter the contact number <br>";
        }else{
            $phone = validateformdata($_POST["phone"]);
        }
        
        //check to see if the each variable has the data
        if( $username && $password && $email && $phone){
            
            $query = "INSERT INTO investor(id,username,password,email,phone_no,signup_time) VALUES (NULL, '$username' , '$password' ,'$email','$phone' , CURRENT_TIMESTAMP )";
        
            if(mysqli_query($conn,$query)){
                echo '<script type="text/javascript">window.alert("new record inserted");        </script>';
            }else{
                echo"Error" .$query."<br>".mysqli_error($conn);
            }
        }
        
    }
    
    #close the mysql connection
    mysqli_close($conn);
    /* my sql query
    INSERT INTO users(id,username,password,email,signup_time,biography)VALUES(NULL,'jacksonamith,'jackson','jack@email.com,CURRENT_TIMESTAMP,'Hello! I\'m jack.this is my bio')
    */    
    include('includes/header.php')
?>
<div style="padding:50px;" class="conatainer">
<h1 style="padding-top:40px; font-size:30px; color:blue"><strong>SIGN UP FOR INVESTOR</strong></h1>
<?php echo $alertMessage; ?> 
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?id=<?php echo $clientId; ?>" method="post" class="row">
    <div class="form-group col-sm-6">
        <small class="text-danger">*<?php echo $name_error; ?></small>
        <label for="client-name">Name *</label>
        <input type="text" class="form-control input-lg" id="client-name" name="username">
    </div>
    
    <div class="form-group col-sm-6">
        <small class="text-danger">*<?php echo $password_error; ?></small>
        <label for="client_email">Password*</label>
        <input type="password" class="form-control input-lg" id="client_email" name="password">
    </div>
    
    <div class="form-group col-sm-6">
        <small class="text-danger">*<?php echo $email_error; ?></small>
        <label for="client_phone">Email</label>
        <input type="text" class="form-control input-lg" id="client_phone" name="email">
    </div>
    
    
    
    <div class="form-group col-sm-6">
        <small class="text-danger">*<?php echo $phone_error; ?></small>
        <label for="client_notes">phone</label>
        <input type="text" class="form-control input-lg" id="client_notes" name="phone">
    </div>
    
    <div class="col-sm-12">
        <hr>
        <a type="button" class="btn btn-primary btn-sm" href="login_investor.php">Have a account Login</a>
        <div class="float-right">
            <a href="Home.php" type="button" class="btn btn-default btn-lg">Cancel</a>
            <button type="submit" class="btn btn-success btn-lg" name="signup">SIGN UP</button>
        </div>
    </div>
    
    
    
    
</form>
    </div><!--container-->

<?php
    include('includes/footer.php');
?>
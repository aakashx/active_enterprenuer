<?php
    session_start();

    include('includes/function.php');

    //check if form was submitted
    if(isset($_POST['login'])){
        
        //create variable
        //wrap data with validate function
        $formemail = validateFormData($_POST['email']);
        $formpass = validateFormData($_POST['password']);
        
        //connect to database
        include('includes/connection.php');
        //create query
        
        $query = "SELECT username,password FROM volunteer WHERE email='$formemail'";
        
        #store the result
        $result = mysqli_query($conn, $query);
        
        //verify if result is returned
        if(mysqli_num_rows($result)>0){
            
            //store the vasic userdata into variable
            while( $row = mysqli_fetch_assoc($result)){
                $user = $row['username'];
                $hashedpass = $row['password'];
            }
            
            //verify the hashed password with submitted password
            if(password_verify($formpass,$hashedpass)){
                
                //correct login datails
                //store the data in session variable
                $_SESSION['loggedinuser'] = $user;
                
                //redirect user to the client page
                header("Location:Home.php");
            }else{
                //hashed password didn't verifed
                $loginError = "<div class='alert alert-danger'>Wrong password / username combination.Try again.Try again.New Volunteer<a href='login_volunteer.php'> Sign up</a></div>";
            }
        }else{
            //there is no reult in database
            //error message
            $loginError = "<div class='alert alert-danger'>No such user in database.Please try again.Try again.New User<a href='login_user.php'> Sign up</a><a class='close' data-dismiss='alert'>&times;</a></div>";
        }
    }
    //close mysql connection
    mysqli_close($conn);

    include('includes/header.php');
?>
        
        <h1 style="padding-top:60px;">LOGIN FOR VOULNTEER</h1>
        
        <?php echo $loginError; ?>
        <form style="padding:0 0 40px 430px;" class="form-inline" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            
            <div class="form-group mb-2 mr-sm-2">
                <label for="login_email" class="sr-only">Email</label>
                <input type="text" class="form-control" id="login_email" placeholder="email" name="email" value="<?php echo $formemail; ?>">
             </div>
            
            <div class="form-group mb-2 mr-sm-2">
                <label for="login_password" class="sr-only">Password</label>
                <input type="password" class="form-control" id="login_password" placeholder="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary mb-2" name="login">Login</button>
            
        </form>

<?php
    include('includes/footer.php');
?>
   
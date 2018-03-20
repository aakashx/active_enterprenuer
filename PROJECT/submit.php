<?php
    session_start();
    
    include('connection.php');

    if(isset($_POST['add'])){
        
        //build a function to validate the data
        function validateformdata($formdata){
            $formdata = trim(stripslashes(htmlspecialchars($formdata)));
            return($formdata);
        }
        
        //check to see if function are empty
        //create a variable with from data
        //wrap the data around our function
        $name=$email=$phone=$aadhar=$message="";
        
        if(!$_POST["name"]){
            $name_error = "Please enter the name<br>";
        }else{
            $name = validateformdata($_POST["name"]);
        }
        
        if(!$_POST["email"]){
            $email_error = "Please enter the email<br>";
        }else{
            $email = validateformdata($_POST["email"]);
        }
        
        if(!$_POST["phone"]){
            $phone_error = "Please enter the Phone number<br>";
        }else{
            $phone = validateformdata($_POST["phone"]);
        }
        
        if(!$_POST["aadhar"]){
            $aadhar_error = "Please enter the aadhar number<br>";
        }else{
            $aadhar = validateformdata($_POST["aadhar"]);
        }
        
        if(!$_POST["message"]){
            $message_error = "Please enter the about your idea<br>";
        }else{
            $message = validateformdata($_POST["message"]);
        }
        
        //check to see if the each variable has the data
        if( $name && $email && $phone && $aadhar && $message){
            
            $query = "INSERT INTO submit(id,name,email,phone,aadhar_no,message) VALUES (NULL, '$name' , '$email' ,'$phone', '$aadhar', '$message' )";
        
            if(mysqli_query($conn,$query)){
                echo '<script type="text/javascript">window.alert("new record inserted");        </script>';
            }else{
                echo"Error" .$query."<br>".mysqli_error($conn);
            }
        }else{
            echo"fields are empty";
        }
        
    }
    mysqli_close($conn);
    
    /* my sql query
    INSERT INTO users(id,username,password,email,signup_time,biography)VALUES(NULL,'jacksonamith,'jackson','jack@email.com,CURRENT_TIMESTAMP,'Hello! I\'m jack.this is my bio')
    */  
    include('includes/header.php');
?>


        <div class="container">
            <div class="page-header">
                <h1 style="padding-top:70px;" >IDEA SUBMITTION FORM</h1>
                <small style="text-transform:uppercase;">(all field are neccessary)</small>
            </div><!-- page-header-->
            <hr>

            <div class="row">
                <div class="col-md-5">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group has-success">
                            <small class="text-danger">*<?php echo $name_error; ?></small>
                            <label for="formName">Your name</label>
                            <input type="text" id="formName" class="form-control" name="name">
                        </div>
                        <div class="form-group has-success">
                            <small class="text-danger">*<?php echo $email_error; ?></small>
                            <label for="formEmail">Your Email</label>
                            <input type="email" id="formEmail" class="form-control" name="email">
                        </div>
                        <div class="form-group has-success">
                            <small class="text-danger">*<?php echo $phone_error; ?></small>
                            <label for="formphone">Your Phone number</label>
                            <input type="text" id="formphone" class="form-control" name="phone">
                        </div>
                        <div class="form-group has-success">
                            <small class="text-danger">*<?php echo $aadhar_error; ?></small>
                            <label for="formUID">Your aadhar number</label>
                            <input type="text" id="formUID" class="form-control" name="aadhar">
                        </div>
                        <div class="form-group has-success">
                            <small class="text-danger">*<?php echo $message_error; ?></small>
                            <label for="formMsg">Your Message</label>
                            <textarea class="form-control" rows="4" id="formMsg" name="message"></textarea>
                        </div>
                        
                        
                        <button type="submit" class="btn btn-default" name="add">Submit</button>
                        
                    </form>
                </div>
                
                <div class="col-md-5 " style="margin-top:120px;" >
                    <img class="float-right" src="logo/Idea_Submission.gif">
                </div>
                
                    
                </div>
            </div><!--row-->

            <br><br><hr>

            

<?php
    include('includes/footer.php');
?>
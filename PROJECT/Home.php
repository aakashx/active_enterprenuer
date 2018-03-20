<?php
    session_start();
    include('includes/connection.php');

    //close the connection
    mysqli_close($conn);

    include('includes/header.php');
?>
    <div id="scrollerBox" data-spy="scroll" data-target="#navbar-scroll">
        <div class="cover" id="home">
            <div class="cover-text" style="color:black;">
                <h1>ENLIGHTING, EMPOWERING , ENGAGING FOR A BETTER WORLD !</h1>
                <p class="lead">Be a social Enterprenuer,A platform form young enterpreneur to made a career in the field with policies of goverment</p>
                <a href="signup_user.php" role="button" class="btn btn-danger btn-lg">BE A USER</a>
                <a href="signup_volunteer.php" role="button" class="btn btn-danger btn-lg">BE A VOLUNTEER</a>
                <a href="signup_investor.php" role="button" class="btn btn-danger btn-lg">BE A INVESTOR</a>
            </div><!-- cover-text-->
        </div><!-- cover-->

        
    
        <section id="department">
            <h2 style="font-size:28px; margin-bottom:50px; display:block; background:aqua; padding:20px; ">SOCIAL ENTERPRENEURSHIP PLATFROM</h2>
            <hr style="size:2px;"> 
            <div class="container">
                <div class="row">
                    <div class="col-sm-4" >
                        
                        <img style="border:solid 2px black;" src="logo/logo.jpg"  >
                        <h2><a href="makeinindia_info.php">MAKE IN INDIA</a></h2>

                    </div>
                    <div class="col-sm-4">
                        <img style="border:solid 2px black;" src="logo/logo1.jpg" >
                        <h2><a href="solaralliance_info.php">SOLAR ALlIANCE</a></h2>
                    </div>
                    <div class="col-sm-4">
                        <img style="border:solid 2px black;" src="logo/logo2.jpg" >
                        <h2><a href="organicfarming_info.php">ORGANIC FARMING</a></h2>
                    </div>
                    <div class="col-sm-4">
                        <img style="border:solid 2px black;" src="logo/logo4.png" >
                        <h2><a href="info.php">SWACHH BHARAT</a></h2>
                    </div>
                    <div class="col-sm-4">
                        <img   style="border:solid 2px black;" src="logo/logo3.jpg" >
                        <h2><a href="csc_info.php">COMMON SERVICE CENTER</a></h2>
                    </div>
                    <div class="col-sm-4">
                        <img style="border:solid 2px black;" src="logo/logo5.jpg" >
                        <h2><a href="greenbusiness.php">GREEN BUSINESS</a></h2>
                    </div>
                    <div class="col-sm-4">
                        <img style="border:solid 2px black;" src="logo/logo6.gif" >
                        <h2><a href="csir_info.php">CSIR</a></h2>
                    </div>
                    
                </div><!-- row-->
            </div><!-- container -->
        </section><!--why us -->
    </div> 

<?php
    include('includes/footer.php');
?>
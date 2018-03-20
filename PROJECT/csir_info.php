<?php
    session_start();
    
    include('includes/connection.php');

    //close the mysqli connection
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

        
        
        <section id="Info">
            <h3 style="text-align:center; padding-bottom:40px;">COUNCIL OF SCIENTIFIC AND INDUSTRIAL  RESEARCH</h3>
            <p>The Council of Scientific and Industrial Research (IAST: vagyanik tatha audyogik anusandhana pari?ada; abbreviated as CSIR) was established by the Government of India in 1942 is an autonomous body that has emerged as the largest research and development organisation in India. It runs thirty-eight laboratories and thirty-nine field stations or extension centres throughout the nation, with a collective staff of over 12,000 scientists and scientific and technical personnel.Although it is mainly funded by the Ministry of Science and Technology, it operates as an autonomous body through the Societies Registration Act, 1860.The research and development activities of CSIR include aerospace engineering, structural engineering, ocean sciences, life sciences, metallurgy, chemicals, mining, food, petroleum, leather, and environmental science.Dr. Girish Sahni was appointed as director general of CSIR, with effect from August 24, 2015.</p>
            
            <br><hr>
            <h2>Policies offer by goverment</h2>
            
            <div style="background:white;" class="container">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="detail col-sm-10">
                        <h3 style="text-transform:uppercase;">DSIR : Department of Scientific and Industrial Research.</h3>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at eros</p>
                        <a type="button" class="btn btn-primary btn-sm" href="">SUBMIT A IDEA</a>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1"></div>
                    <div class="detail col-sm-10">
                        <h3 style="text-transform:uppercase;">CSIR-Structural Engineering Research Centre.</h3>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at eros</p>
                        <a type="button" class="btn btn-primary btn-sm" href="">SUBMIT A IDEA</a>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1"></div>
                    <div class="detail col-sm-10">
                        <h3 style="text-transform:uppercase;">Planning and Performance Division (PPD).</h3>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at eros</p>
                        <a type="button" class="btn btn-primary btn-sm" href="">SUBMIT A IDEA</a>
                    </div>
                    <div class="col-sm-1"></div>
                    
                   
                </div><!-- row-->
                
            </div><!-- container -->
        </section><!--why us -->

        
<?php
    include('includes/footer.php');
?>
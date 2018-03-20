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
            <h3 style="text-align:center; padding-bottom:40px;">ABOUT ORGANIC FARMING</h3>
            <p>Organic farming system in India is not new and is being followed from ancient time. It is a method of farming system which primarily aimed at cultivating the land and raising crops in such a way, as to keep the soil alive and in good health by use of organic wastes (crop, animal and farm wastes, aquatic wastes) and other biological materials along with beneficial microbes (biofertilizers) to release nutrients to crops for increased sustainable production in an eco friendly pollution free environment.</p>
            
            <br><hr>
            <h2>Policies offer by goverment</h2>
            
            <div style="background:white;" class="container">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="detail col-sm-10">
                        <h3>PROMOTION OF ORGANIC FARMING.</h3>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at eros</p>
                        <a type="button" class="btn btn-primary btn-sm" href="submit.php">SUBMIT A IDEA</a>
                    </div>
                    <div class="col-sm-1"></div>
                    
                    <div class="col-sm-1"></div>
                    <div class="detail col-sm-10">
                        <h3>TECHNIQUES OF ORGANIC FARMING.</h3>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at eros</p>
                        <a type="button" class="btn btn-primary btn-sm" href="submit.php">SUBMIT A IDEA</a>
                    </div>
                    <div class="col-sm-1"></div>
                   
                   
                </div><!-- row-->
                
            </div><!-- container -->
        </section><!--why us -->

        
<?php
    include('includes/footer.php');
?>
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
            <h3 style="text-align:center; padding-bottom:40px;">ABOUT SWACHH BHARAT ABHIYAN</h3>
            <p>According to Census 2011, India’s urban population is 377 million or 31% of the total population. These numbers are expected to increase to 600 million by 2031. The Census 2011 also showed that in 4,041 statutory towns, close to eight million households do not have access to toilets and defecate in the open (7.90 million). Weak sanitation has significant health costs and untreated sewage from cities is the single biggest source of water resource pollution in India. This indicates both the scale of the challenge ahead of the Indian cities and the huge costs incurred from not addressing them. The Swachh Bharat Mission (SBM) emanates from the vision of the Government articulated in the address of The President of India in his address to the Joint Session of Parliament on 9th June 2014: “We must not tolerate the indignity of homes without toilets and public spaces littered with garbage. For ensuring hygiene, waste management and sanitation across the nation, a “Swachh Bharat Mission” will be launched. This will be our tribute to Mahatma Gandhi on his 150th birth anniversary to be celebrated in the year 2019.”  SBM is being implemented by the Ministry of Housing and Urban Affairs (M/o HUA) and by the Ministry of Drinking Water and Sanitation (M/o DWS) for urban and rural areas respectively</p>
            
            <br><hr>
            <h2>Policies offer by goverment</h2>
            
            <div style="background:white;" class="container">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="detail col-sm-10">
                        <h3>BIO DIGEST TOILET.</h3>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at eros</p>
                        <a type="button" class="btn btn-primary btn-sm" href="submit.php">SUBMIT A IDEA</a>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1"></div>
                    <div class="detail col-sm-10">
                        <h3>SWACHH NEIGHBOURHOOD.</h3>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at eros</p>
                        <a type="button" class="btn btn-primary btn-sm" href="">SUBMIT A IDEA</a>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1"></div>
                    <div class="detail col-sm-10">
                        <h3>WASTE TO WEALTH.</h3>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at eros</p>
                        <a type="button" class="btn btn-primary btn-sm" href="">SUBMIT A IDEA</a>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1"></div>
                    <div class="detail col-sm-10">
                        <h3>SWACHH HOSPITALS.</h3>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at eros</p>
                        <a type="button" class="btn btn-primary btn-sm" href="">SUBMIT A IDEA</a>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1"></div>
                    <div class="detail col-sm-10">
                        <h3>SWACHH RAILWAY STATION.</h3>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at eros</p>
                        <a type="button" class="btn btn-primary btn-sm" href="">SUBMIT A IDEA</a>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1"></div>
                    <div class="detail col-sm-10">
                        <h3>SWACHH SCHOOLS.</h3>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at erosMorbi leo risus, porta ac consectetur ac, vestibulum at eros</p>
                        <a type="button" class="btn btn-primary btn-sm" href="">SUBMIT A IDEA</a>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-1"></div>
                    <div class="detail col-sm-10">
                        <h3>SWACHH CITY PLANE TEMPLATE.</h3>,
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
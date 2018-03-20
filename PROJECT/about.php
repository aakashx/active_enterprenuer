<?php
    include('includes/header.php');
?>
    

   <div id="scrollerBox" data-spy="scroll" data-target="#navbar-scroll">
        <div class="cover" id="home">
            <div class="cover-text"  style="color:black;">
                <h1>ENLIGHTING, EMPOWERING , ENGAGING FOR A BETTER WORLD !</h1>
                <p class="lead" style="color:black;">Be a social Enterprenuer,A platform form young enterpreneur to made a career in the field with policies of goverment</p>
                <a href="signup_user.php" role="button" class="btn btn-danger btn-lg">BE A USER</a>
                <a href="signup_volunteer.php" role="button" class="btn btn-danger btn-lg">BE A VOLUNTEER</a>
                <a href="signup_investor.php" role="button" class="btn btn-danger btn-lg">BE A INVESTOR</a>
            </div><!-- cover-text-->
        </div><!-- cover-->

        
        <div style="margin:40px;" class="container">
        
        
        <!-- navigation tab -->
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-about" aria-selected="true">About us</a>
                
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact us</a>
         </div><!-- nav tabs -->
            
        </nav>
        
        <!-- tab panes-->
        <div class="tab-content" id="nav-tabContent">
            
          <div class="tab-pane fade show active" id="nav-about" role="tabpanel" aria-labelledby="nav-home-tab">
              <h3> ABOUT THE PLATFORM</h3>
              <p>when a distinguished but elderly scientist states that something is
            possible,he is almost certainly right.When he states that something is impossible,he is very probably wrong.when a distinguished but elderly scientist states that something is
            possible,he is almost certainly right.When he states that something is impossible,he is very probably wrong.when a distinguished but elderly scientist states that something is
            possible,he is almost certainly right.When he states that something is impossible,he is very probably wrong.when a distinguished but elderly scientist states that something is
            possible,he is almost certainly right.When he states that something is impossible,he is very probably wrong.</p>
          </div>
            
            
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
              <h3 style="padding:30px; margin-left:430px;">Contact US</h3>
               <section id="signup">
            <div class="container">
                <h2>Get our handcrafted newsletter</h2>                
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control input-lg" placeholder="Put your real address here.........">
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-lg" type="button">Handcraft it</button>
                                </span>
                            </div><!-- input-group-->
                        </form><!-- form -->
                    </div><!-- col-sm-8-->
                </div><!-- row -->
            </div><!-- container -->
        </section><!-- signup-->
          </div>
        
        </div><!-- tab-content-->
        
    </div><!-- container -->    
    
    
    </div> 

<?php
    include('includes/footer.php');
?>

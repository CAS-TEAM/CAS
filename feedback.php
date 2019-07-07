<?php

session_start();

if(isset($_SESSION['id']))
{

include 'dbh.php';

$userId=mysqli_real_escape_string($conn,$_SESSION['id']);

$sqlx="SELECT profilePicLocation FROM faculty_table WHERE id='$userId'";
$resultx=mysqli_query($conn,$sqlx);
$rowx=mysqli_fetch_assoc($resultx);
$profilePicLocation=$rowx['profilePicLocation'];

include 'top.php';
include 'left-nav.php';
?>
	  	
    <div class="container contact-form" style="margin-top: 8px">
	    <div class="row">    		
		    <div class="col offset-md-2 parta" id="part-a-container">
				<!-- <div class="contact-image">
				    <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" style="margin-top: -68px" />
				</div> -->
		    	<form method="POST" action="feedback_sys.php">
		            <h3 style="margin-top: -100px">Drop Us a Message</h3>
	               	<div class="row">
	                    <div class="col-md-6">
	                        <div class="form-group">
	                            <input type="text" name="name" class="form-control partaformcontrol" placeholder="Your Name *" value="" required />
	                        </div>
	                        <div class="form-group">
	                            <input type="text" name="email" class="form-control partaformcontrol" placeholder="Your Email *" value="" required />
	                        </div>
	                        <div class="form-group">
	                            <input type="text" name="phone" class="form-control partaformcontrol" placeholder="Your Phone Number *" value="" required />
	                        </div>
	                        <div class="form-group">
	                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
	                        </div>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="form-group">
	                            <textarea name="message" class="form-control partaformcontrol" placeholder="Your Message *" style="width: 100%; height: 150px;" required ></textarea>
	                        </div>
	                    </div>
	                </div>
		        </form>
		    </div>
		</div>
	</div>

<?php

}
else
{
	header("LOCATION: index.php");
}
        
            

    	
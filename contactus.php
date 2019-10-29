<!DOCTYPE html>
<html lang="en">
<title>Vishna Industries</title>
	
	<?php include 'header.php'; ?>

    <section id="contact-info">
        <div class="center">                
            
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3687.2875526884927!2d70.04602!3d22.455825999999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395715344726e5e5%3A0x7519e8d5bfe0c775!2sOracle+International!5e0!3m2!1sen!2sin!4v1422693364453" width="600" height="450" frameborder="0" style="border:0"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-5">
                                <address>
                                    <h2><b>VISHNA INDUSTRIES</b></h2>
                                    <p>
                                    Plot No. 361 / 6, G.I.D.C.,<br>
									Shankar Tekri, Udhyognagar,<br>
                                    Jamnagar - 361004.<br>
									GUJARAT –INDIA &nbsp;<img src="images/india.png">
</p>
                                    <p>Tel: +91 288 2564605<br>
									Cell: +91 97274 44947<br>
                                    Skype: bhaveshethiya<br>
 <br>
                                    E-mail: vishnaindustries@gmail.com</p> 
                                </address>

                              
                            </li>
							<br>
							<li class="col-sm-2">
                            <img src="images/mahatma.png" width="400" > 
							</li>
                        </ul>
                    </div>
			

                </div>
				
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
              
                <p class="lead">Feel free to send your query.</p>
            </div> 
            <div class="row contact-wrap" style="width:60%; margin:0 auto"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form method="POST" name="contactform" action="http://www.vishnax.com/test/contact-form-handler.php"> 
<p>
<label for='name' style="color:#4E4E4E">Your Name:</label> <br>
<input type="text" name="name" class="form-control">
</p>
<p>
<label for='email' style="color:#4E4E4E">Email Address:</label> <br>
<input type="text" name="email" class="form-control"> <br>
</p>
<p>
<label for='message' style="color:#4E4E4E">Message:</label> <br>
<textarea name="message" class="form-control"></textarea>
</p>
<input type="submit" value="Submit" class="btn btn-primary btn-lg"><br>
</form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

   

  
    <!-- validation -->
    <script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>
    <!-- validation -->
	<?php include 'footer.php'; ?>
</body>
</html>	
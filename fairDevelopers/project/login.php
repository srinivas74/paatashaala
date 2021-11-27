<?php
include ("connection.php");
include ("login_process.php");
include ('header.php');

?>
<style type="text/css">
	.error{
		font-size: 18px;
    line-height: 30px;
    color:#ee0808;
    margin-bottom: 15px;
    font-weight: 700;
	}
</style>

<section class="w3l-breadcrumb">
  <div class="container">
    <ul class="breadcrumbs-custom-path">
      <li><a href="login.php">Login</a></li>
    </ul>
  </div>
</section>



<section class="w3l-contact-7 pb-5" id="contact" >
    <div class="contacts-9 pt-lg-5 pt-md-4">
        <div class="container">
            <div class="top-map">
                <div class="row map-content-9" style="
    justify-content: center;
">
                    <div class="col-lg-8">
                        <div class="contact-form">
                         <div class="d-flex justify-content-center">   <h5 class="mb-2">Verify Your Access</h5></div>
                            <p class="mb-3"></p>
                            <form method="post" action="" class="form-signin ">
                                <div class="form-grid">
                                    <div class="input-field">
                                        <input type="text" id="username"
									name="username" placeholder="Username" required="">
                                    </div>
                                    <div class="input-field">
                                        <input type="password" id="password"
									name="password" placeholder="Password"
                                            required="">
                                    </div>
                                </div>
                               
                                <div class="d-flex justify-content-center">
                                <button  value="Login" id="login_submit"
									name="login_submit" class="btn btn-primary btn-style mt-3">Submit</button></div>
									<div class="d-flex justify-content-center"><div class="error mt-4">
									<?php echo $error; ?>	
			            </div></div>
									

                            </form>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
        
    </div>
</section>




<?php
include ("footer.php");

?>


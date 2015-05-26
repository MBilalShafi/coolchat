

<!-- NAVBAR CODE END -->
    <div id="signup" >
        <div class="overlay">
            <!-- overylay class usage -->
            <div class="container">
                <div class="col-md-8 col-md-offset-2 text-center">
				<br>
				<br>
				<br>
					<h1 style="color:white;">Sign Up</h1>
					<p style="color:white;">It only takes a few seconds...</p> <br><br><br>
					<form class="signup" method="post" action="insertdata.php">
						<div class="row">
							<div class="col-xs-6"><input type="text" name="fname" placeholder="First Name" /></div>
							<div class="col-xs-6"><input type="text" name="lname" placeholder="Last Name" /></div>
						</div>
						<div class="row">
							<div class="col-xs-12"><input type="email" name="email" placeholder="Your Email Address"/> 
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12"><input type="password" name="password" placeholder="Enter Password"/></div>
						</div>
						<div class="row">
							<div class="col-xs-12"><input type="password" name="cpassword"  placeholder="Re-enter Password"/></div>
						</div> <font style="color:white;">
						&nbsp;&nbsp;&nbsp;Your Birthday </font>
						<div class="row">
							<div class="col-xs-12"><input name="dob" type="date"/></div>
						</div>
						<div class="row radio">
							<div class="col-md-4">
								<input type="radio" name="gender" checked="checked" value="M"/> <font style="color:white;">Male
							</div>
							<div class="col-md-4">
								<input type="radio" name="gender" value="F"/> Female</font>
							</div>
							<h1><?php if(isset($_GET['msg']))
							 {
							 echo $_GET['msg'];
							 }
							 ?></h1>
						</div>
						  <br><br>
						  
						  <div class="row">
							<div class="col-md-10">
						  <div class="checkbox" name ="agree" style="">
							<input type="checkbox" style="width:15px; height:15px;">
						  <label> <font color="white">Agreed to the Terms and Conditions</font></label> 
						  
      </div> </div>
						</div>
						  
						<div class="row">
							<div class="col-xs-4">
					<button type="submit" name="signup" class="btn btn-primary" style="  width:200px;">Sign Up</button>
							</div>
						</div>
					</form>
				</div>
                </div>

            </div>
        </div>

    </div>
	

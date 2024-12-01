<div class="loginform-section spad">
	<form id="Loginform" action="<?=base_url()?>Login/verifyUser" method="post" style="border:1px solid #ccc">

		<div class="container">
		 <h1>Login</h1>
		 <?php $string = validation_errors(); if(!empty($string)): ?>
		 <?php echo'<div class="alert" style="width:60%">' .validation_errors(). '</div>' ?>
		 <?php endif; ?>
		 <p><?php echo $this->session->flashdata('login_status'); ?></p>
		 <hr>

		 <label for="usertype"><b>User type</b></label>
		    <select name="cUsertype" id="usertype">
		      <option value="" disabled="disabled" selected="selected">Please Select</option> 
		         <option value="1" selected="selected" > Student</option>
		         <option value="2" > Admin</option>
		    </select>

		 <label for="email"><b>Login Email</b></label>
		 <input type="email" placeholder="Enter Email" name="cEmail" required>

		 <label for="password"><b>Login Password</b></label>
		 <input type="password" placeholder="Enter Password" name="cPassword" required>

		 <label>
		  <input type="checkbox" checked="checked" name="remember" style="margin-bottom:l5px"> Remember me 
		 </label>

		 <div class="clearfix">
		 	<button type="button" class="cancelbtn">Cancel</button>
		 	<button type="submit" class="signupbtn">Login Now</button>
		 </div>
		</div>
	</form>
</div>


<style>                                                                                  
body {font-family: Arial, Helvetica, sons-serif;}
* {box-sizing: border-box}
                                                                 
/* Full-width input fields */                                                           
input[type=text], input[type=password],input[type=email], select {
 width: 100%;
 padding: 15px;
 margin: 5px 0 22px 0; 
 display: inline-block; 
 border: none;
 background: #f1f1f1;
}
                                                                                        
input[type=text]:focus, input[type=password]:focus, input[type=email]:focus, select:focus { 
 background-color: #ddd;
 outline: none;
}
                                                                                        
hr {
 border: 1px solid #f1f1f1; 
 margin-bottom: 25px;
}

button {
	background-color: #4CAF50;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 20%;
	opacity: 0.9;
}

button:hover {
	opacity: 1;
}

/* Extra styles for the cancel button */
.cancelbtn {
	padding: 14px 20px;
background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
	float:  left;
	width: 20%;
}

/* Add padding to container elements */
.container {
	padding: 16px;
	width: 80%;
}

/*clear float */
.clearfix::after {
	content: "";
	clear: both;
	display: table;
}

.alert {
	padding: 20px;
	background-color: #f44336;
	color: white;
}

.alert_green {
	padding: 20px;
	background-color: #00cc66;
	color: white;
}

@media screen and (max-width: 20300px) {
	.cancelbtn, .signupbtn {
		width: 20%;
	}
}
</style>

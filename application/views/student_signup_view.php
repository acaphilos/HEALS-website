<div class="loginform-section spad">
	<form id="studentFormSignUp" action="<?=base_url()?>StudentSignup/addnewStudent" method="post" style="border:1px solid #ccc">

		<div class="container">
		 <h1>Sign Up</h1>
		 <p>Please fill in this form to create an account.</p> 
		 <p><?php echo $this->session->flashdata('status'); ?></p>
		 <?php $string = validation_errors(); if(!empty($string)): ?>
		 <?php echo'<div class="alert" style="width:60%">' .validation_errors(). '</div>' ?>
		 <?php endif; ?>
		 <hr>

		 <label for="name"><b>Student Name</b></label>
		 <input type="text" placeholder="Enter Student Name" name="stdName" required>

		 <label for="gender"><b>Gender</b></label>
	    <select name="stdGender" id="stdGender">
	      <option value="" disabled="disabled" selected="selected">Please Select</option> 
	         <option value="1" selected="selected"> Male</option>
	         <option value="2"> Female</option>
	    </select>

		 <label for="program"><b>Program</b></label>
		 <input type="text" placeholder="Enter Program" name="stdProgram" required>

		 <label for="currentYear"><b>Current Year </b></label>
		 <input type="text" placeholder="Enter Current Year " name="stdYear" required>

		 <label for="phoneNo"><b>Phone No.</b></label>
		 <input type="text" placeholder="Enter Phone No. " name="stdPhone">

		 <label for="add1"><b>Address 1</b></label>
		 <input type="text" placeholder="Enter Address 1 " name="stdAdd1">

		 <label for="add2"><b>Address 2</b></label>
		 <input type="text" placeholder="Enter Address 2" name="stdAdd2">

		 <label for="city"><b>City</b></label>
		 <input type="text" placeholder="Enter City" name="stdCity">

		 <label for="state"><b>State</b></label>
		 <input type="text" placeholder="Enter State" name="stdState">

		 <label for="postal"><b>Postal Code</b></label>
		 <input type="text" placeholder="Enter Postal Code" name="stdPostalCode">

		 <label for="country"><b>Country</b></label>
		 <input type="text" placeholder="Enter Country" name="stdCountry">

		 <label for="email"><b>Login Email</b></label>
		 <input type="email" placeholder="Enter Email" name="stdEmail" required>

		 <label for="password"><b>Login Password</b></label>
		 <input type="password" placeholder="Enter Password" name="stdPassword" required>

		 <label>
		  <input type="checkbox" checked="checked" name="remember" style="margin-bottom:l5px"> Remember me 
		 </label>

		 <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>. 
		 </p>

		 <div class="clearfix">
		 	<button type="button" class="cancelbtn">Cancel</button>
		 	<button type="submit" class="signupbtn">Sign Up</button>
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
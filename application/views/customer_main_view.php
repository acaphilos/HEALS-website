
<div class="loginform-section spad">
	<form id="formSignUp" action="<?=base_url()?>UpdateCustomer" method="post" style="border:1px solid #ccc">

		<div class="container">
		 <h1>Welcome!</h1>
		 <p>Please fill in this form to create an account.</p> 
		 <p><?php echo $this->session->flashdata('status'); ?></p>
		 <?php $string = validation_errors(); if(!empty($string)): ?>
		 <?php echo'<div class="alert" style="width:60%">' .validation_errors(). '</div>' ?>
		 <?php endif; ?>
		 <hr>

		 <label for="name"><b>Company Name</b></label>
		 <input type="text" placeholder="Enter company Name" name="cName" value="<?php echo $customerName?>" required>

		 <label for="name"><b>Contact Person's First Name</b></label>
		 <input type="text" placeholder="Enter Contact Person's First Name" name="cFirstName" value="<?php echo $contactFirstName?>" required>

		 <label for="name"><b>Contact Person's Last Name</b></label>
		 <input type="text" placeholder="Enter contact Person's Last Name" name="cLastName" value="<?php echo $contactLastName?>" required>

		 <label for="name"><b>Phone Number</b></label>
		 <input type="text" placeholder="Enter Phone Number" name="cPhone" value="<?php echo $phone?>" required>

		 <label for="name"><b>Address Line 1</b></label>
		 <input type="text" placeholder="Enter address line 1 " name="cAdd1" value="<?php echo $addressLine1?>" required>

		 <label for="name"><b>Address Line 2</b></label>
		 <input type="text" placeholder="Enter address line 2 " name="cAdd2" value="<?php echo $addressLine2?>">

		 <label for="name"><b>City</b></label>
		 <input type="text" placeholder="Enter city name" name="cCity" value="<?php echo $city?>" required>

		 <label for="state"><b>State</b></label>
		 <input type="text" placeholder="Enter state " name="cState" value="<?php echo $state?>">

		 <label for="postal"><b>Postal Code</b></label>
		 <input type="text" placeholder="Enter Postal Code" name="cPostal" value="<?php echo $postalCode?>">

		 <label for="country"><b>Country</b></label>
		    <select name="cCountry" id="scountry">
		      <option value="" disabled="disabled" selected="selected">Please Select</option> 
		         <option value="1" <?php if ($country==1)echo 'selected = "selected"'?>> Malaysia</option>
		         <option value="2" <?php if ($country==2)echo 'selected = "selected"'?>> Singapore</option>
		    </select>

		 <div class="clearfix">
		 	<button type="button" class="cancelbtn">Cancel</button>
		 	<button type="submit" class="signupbtn">Update</button>
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
<section class="spad" data-setbg="public/img/bg.svg">
<form id="formStudent" action="<?=base_url()?>UpdateStudent" method="post" style="border:1px solid #ccc">

	<div class="container">
	 <h1>Edit Profile</h1>
	 <h4>Please update the information correctly.</h4> 
	 <p><?php echo $this->session->flashdata('status'); ?></p>
	 <?php $string = validation_errors(); if(!empty($string)): ?>
	 <?php echo'<div class="alert" style="width:60%">' .validation_errors(). '</div>' ?>
	 <?php endif; ?>
	 <hr>

	 <label for="name"><b>Student Name</b></label>
	 <input type="text" placeholder="Enter Student Name" name="sName" value="<?php echo $student_data->stdName?>" required>

	 <label for="gender"><b>Gender</b></label>
	    <select name="sGender" id="scountry">
	      <option value="" disabled="disabled" selected="stdGender">Please Select</option> 
	         <option value="1" <?php if ($student_data->stdGender==1)echo 'selected = "selected"'?> > Male</option>
	         <option value="2" <?php if ($student_data->stdGender==2)echo 'selected = "selected"'?> > Female</option>
	    </select>

	 <label for="program"><b>Student Program</b></label>
	 <input type="text" placeholder="Enter Student Program" name="sProgram" value="<?php echo $student_data->stdProgram?>" required>

	 <label for="CurrentYear"><b>Current Year</b></label>
	 <input type="text" placeholder="Enter Current Year" name="sCurrentYear" value="<?php echo $student_data->stdCurrentYear?>" required>

	 <label for="phone"><b>Student Phone Number</b></label>
	 <input type="text" placeholder="Enter Phone Number" name="sPhoneNo" value="<?php echo $student_data->stdPhoneNo?>" required>

	 <label for="email"><b>Student Email</b></label>
	 <input type="text" placeholder="Enter Student Email" name="sEmail" value="<?php echo $student_data->stdEmail?>" required>

	 <label for="Address1"><b>Student Address 1</b></label>
	 <input type="text" placeholder="Enter Student Address" name="sAddress1" value="<?php echo $student_data->stdAddress1?>" required>

	 <label for="Address2"><b>Student Address 2</b></label>
	 <input type="text" placeholder="Enter Student Address" name="sAddress2" value="<?php echo $student_data->stdAddress2?>">

	 <label for="city"><b>Student City</b></label>
	 <input type="text" placeholder="Enter Student City" name="sCity" value="<?php echo $student_data->stdCity?>" required>

	 <label for="state"><b>Student State</b></label>
	 <input type="text" placeholder="Enter Student State" name="sState" value="<?php echo $student_data->stdState?>" required>

	 <label for="postalcode"><b>Student Postal Code</b></label>
	 <input type="text" placeholder="Enter Student Postal Code" name="sPostalCode" value="<?php echo $student_data->stdPostalCode?>" required>

	 <label for="country"><b>Student Country</b></label>
	 <input type="text" placeholder="Enter Student Country" name="sCountry" value="<?php echo $student_data->stdCountry?>" required>

	 <div class="clearfix">
	 	<button type="button" class="cancelbtn">Cancel</button>
	 	<button type="submit" class="updatebtn">Update</button>
	 </div>
	</div>
</form>
<!-- </section> -->

<style>    

body {font-family: Arial, Helvetica, sons-serif;}
* {box-sizing: border-box}

.container h1{
	margin-top: 50px;
}
                                                                 
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
.cancelbtn, .updatebtn {
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
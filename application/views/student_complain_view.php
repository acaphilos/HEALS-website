<div class="loginform-section spad">
	<form id="studentFormComplain" action="<?=base_url()?>StudentComplain/addnewComplain" method="post" style="border:1px solid #ccc">

<section class="hero-section hero-title set-bg" data-setbg="<?=base_url()?>public/img/bg.svg">
		<div class="container h-100">
		  <div class="hero-content text-white">
		    <div class="row">
		      <div class="title">
		        <h2>Complain Submission</h2>
		      </div>
		    </div>
		  </div>
		</div>
		</section>

		<div class="container">
		 <h2>Submit a Complain</h2>
		 <p>Please fill in this form to submit a complain.</p> 
		 <?php echo $this->session->flashdata('status'); ?>
		 <?php $string = validation_errors(); if(!empty($string)): ?>
		 <?php echo'<div class="alert" style="width:60%">' .validation_errors(). '</div>' ?>
		 <?php endif; ?>
		 <hr>

		 <label for="email"><b>Email</b></label>
		 <input type="text" placeholder="Enter Email" name="cEmail" required>

		 <label for="name"><b>Complainer Name </b></label>
		 <input type="text" placeholder="Enter Complainer Name " name="cName" required>

		 <label for="title"><b>Complain Title</b></label>
		 <input type="text" placeholder="Enter Complain Title" name="cTitle" required>

		 <label for="content"><b>Complain Content</b></label>
		 <input type="text" placeholder="Enter Complain Content " name="cContent" required>

		 <label for="date"><b>Complain Date</b></label>
		 <input type="date" placeholder="" name="date" required>
 

		 <div class="clearfix">
		 	<button type="button" class="cancelbtn">Cancel</button>
		 	<button type="submit" class="signupbtn">Submit</button>
		 </div>
		</div>
	</form>
</div>

<style>                                                                                   
body {font-family: Arial, Helvetica, sons-serif;}
* {box-sizing: border-box}

.hero-title
{
  height:400px;
  overflow:hidden;
}

.hero-content h2 
{
  font-size: 5.625rem;
  font-weight:600;
  text-align: center;
  margin-top: 120px;
  line-height:1;
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
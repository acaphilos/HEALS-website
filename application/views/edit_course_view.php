<section class="spad">
<form id="formCourse" action="<?=base_url()?>UpdateCourse" method="post" style="border:1px solid #ccc">

	<div class="container">
	 <h1>Edit Course</h1>
	 <h4>Please update the information correctly.</h4> 
	 <p><?php echo $this->session->flashdata('status'); ?></p>
	 <?php $string = validation_errors(); if(!empty($string)): ?>
	 <?php echo'<div class="alert" style="width:60%">' .validation_errors(). '</div>' ?>
	 <?php endif; ?>
	 <hr>

	 <label for="ID"><b>Course ID</b></label>
	 <input type="text" placeholder="Enter Course ID" name="cID" value="<?php $courseId?>" required>

	 <label for="name"><b>Course Name</b></label>
	 <input type="text" placeholder="Enter Course Name" name="cName" value="<?php  $courseName?>" required>

	 <label for="desc"><b>Course Description</b></label>
	 <input type="text" placeholder="Enter Course Description" name="cDesc" value="<?php $courseDesc?>" required>

	 <label for="syllabus"><b>Course Syllabus</b></label>
	 <input type="text" placeholder="Enter Course Syllabus" name="cSyllabus" value="<?php $syllabus?>" required>

	 <label for="duration"><b>Credits</b></label>
	 <input type="text" placeholder="Enter Course Credits" name="cCredits" value="<?php $credits?>" required>

	 <label for="fee"><b>Course Fee</b></label>
	 <input type="text" placeholder="Enter Course Fee" name="cFee" value="<?php $courseFee?>" required>

	 <label for="lID"><b>Lecturer ID</b></label>
	 <input type="text" placeholder="Enter Lecturer ID" name="lID" value="<?php $lecturerId?>" required>

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
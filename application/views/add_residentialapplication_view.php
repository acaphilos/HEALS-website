<div class="loginform-section spad">
<form id="formResidentialApplication" action="<?=base_url()?>addResidentialApplication/addnew" method="post" style="border:1px solid #ccc">

<section class="hero-section hero-title set-bg" data-setbg="<?=base_url()?>public/img/bg.svg">
		<div class="container h-100">
		  <div class="hero-content text-white">
		    <div class="row">
		      <div class="title">
		        <h2>Residential Application</h2>
		      </div>
		    </div>
		  </div>
		</div>
</section>

<section class="timetable">
  <div>
    <table class="styled-table">
      <thead>
      <tr>
        <th> Application ID </th>
        <th> College Request </th>
        <th> Date </th>
      </tr>
    </thead>

      
    <tbody>
      <?php  
         foreach ($resident_data as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->applicationId;?></td>  
            <td><?php echo $row->collegeRequest;?></td>  
            <td><?php echo $row->date;?></td>  
            </tr>  
         <?php }  
         ?>  
      </tbody>
    </table>
  </div>
</section>

<div class="container">
		<h2>Apply for College Resident</h2>
		 <p>Please fill in this form to apply.</p> 
		 <?php $string = validation_errors(); if(!empty($string)): ?>
		 <?php echo'<div class="alert" style="width:60%">' .validation_errors(). '</div>' ?>
		 <?php endif; ?>
		 <hr>

		 <label for="session"><b>Session</b></label>
		 <input type="text" placeholder="Enter Session" name="rSession" required>

		 <label for="semester"><b>Semester</b></label>
		 <input type="text" placeholder="Enter Semester " name="rSemester" required>

		 <label for="collegeRequest"><b>College Request</b></label>
		 <input type="text" placeholder="Enter College Request " name="rCollegeRequest">

		 <label for="date"><b>Date</b></label>
		 <input type="date" name="rDate" required>


		 <div class="clearfix">
		 	<button type="button" class="cancelbtn">Cancel</button>
		 	<button type="submit" class="submitbtn">Submit</button>
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

.timetable {
    padding-left: 30px;
}

h2 {
    padding-top: 20px;
    padding-bottom: 20px;
}

table {
    border: 1px solid black;
    width: 80%;
}

th,
td {
    border: 1px solid black;
}

.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    background-color: #284B63;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #284B63;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
                                                                 
/* Full-width input fields */                                                           
input[type=text], input[type=date], select {
 width: 100%;
 padding: 15px;
 margin: 5px 0 22px 0; 
 display: inline-block; 
 border: none;
 background: #f1f1f1;
}
                                                                                        
input[type=text]:focus, select:focus { 
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
	.cancelbtn, .submitbtn {
		width: 20%;
	}
}
</style>
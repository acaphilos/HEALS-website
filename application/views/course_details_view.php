<!-- Page preloader -->
<div id="preloader">
  <div class="loader"> </div>
</div>

<section class="hero-section hero-title set-bg" data-setbg="public/img/bg.svg">
<div class="container h-100">
  <div class="hero-content text-white">
    <div class="row">
      <div class="title">
        <h2>Course Details</h2>
      </div>
    </div>
  </div>
</div>
</section>

<section class="timetable">
  <div class="container">
    <table class="styled-table">
      <thead>
      <tr>
        <th> Course ID </th>
        <th> Course Name </th>
        <th> Course Description </th>
        <th> Syllabus </th>
        <th> Credits </th>
        <th> Fee </th>
      </tr>
    </thead>

    <tbody>
      <?php  
         foreach ($course_data as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->courseId;?></td>  
            <td><?php echo $row->courseName;?></td>  
            <td><?php echo $row->courseDesc;?></td>  
            <td><?php echo $row->syllabus;?></td>  
            <td><?php echo $row->credits;?></td>  
            <td><?php echo $row->courseFee;?></td>  
            </tr>  
         <?php }  
         ?>  
    </tbody>
    </table>
  </div>
</section>

<style>
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
</style>
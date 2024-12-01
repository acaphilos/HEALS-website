<!-- Page preloader -->
<div id="preloader">
    <div class="loader"> </div>
</div>

<section class="hero-section hero-title set-bg" data-setbg="<?=base_url()?>public/img/bg.svg">
        <div class="container h-100">
          <div class="hero-content text-white">
            <div class="row">
              <div class="title">
                <h2>Enrol Course</h2>
              </div>
            </div>
          </div>
        </div>
</section>

<section class="timetable spad">
    <h2>Course Timetable</h2>
    <div>
        <table class="styled-table">
            <thead>
                <tr>
                    <th> Subject Code </th>
                    <th> Subject Name </th>
                    <th> Credit Hours </th>
                    <th> Venue </th>
                    <th> Exam Date </th>
                    <th> Exam Day </th>
                    <th> Exam Time </th>
                    <th> Start Time </th>
                    <th> End Time </th>
                    <th> Event </th>
                </tr>
            </thead>


            <tbody>
                <?php
                foreach ($subject_data as $row) {
                ?><tr>
                        <td><?php echo $row->subjectCode; ?></td>
                        <td><?php echo $row->subjectName; ?></td>
                        <td><?php echo $row->creditHours; ?></td>
                        <td><?php echo $row->venue; ?></td>
                        <td><?php echo $row->examDate; ?></td>
                        <td><?php echo $row->examDay; ?></td>
                        <td><?php echo $row->examTime; ?></td>
                        <td><?php echo $row->startTime; ?></td>
                        <td><?php echo $row->endTime; ?></td>
                        <td><?php echo $row->event; ?></td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</section>

<form id="formEnroll" action="<?= base_url() ?>courseEnroll/addEnroll" method="post">
    <section class="enrollment">
        <h2> Course Enrollment </h2>
        <div>
            <p><?php echo $this->session->flashdata('status'); ?></p>
            <?php $string = validation_errors();
            if (!empty($string)) : ?>
                <?php echo '<div class="alert" style="width:60%">' . validation_errors() . '</div>' ?>
            <?php endif; ?>
            <hr>

            <label for="enrollcode">Enter the course code that you want to enroll:</label>
            <input type="text" id="enrollcode" name="subjectCode">
            <button type="submit" class="site-btn">Enroll</button>
        </div>
    </section>
</form>

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

    .enrollment {
        padding-left: 30px;
        padding-bottom: 100px;
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
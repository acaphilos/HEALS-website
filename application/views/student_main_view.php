<!-- Page preloader -->
<div id="preloader">
  <div class="loader"> </div>
</div>

<!-- Hero Section -->
<section class="hero-section set-bg" data-setbg="<?=base_url()?>public/img/bg.svg">
  <div class="container">
    <div class="hero-content text-white">
      <div class="row">
        <div class="container">
          <div class="section-title">
            <p> Welcome, <?php echo $stdName ?>!</p>
            <h2>Student Dashboard</h2>
          </div>

          <div class="row">
        
            <div class="col-lg-4 col-md-6 feature-item">
              <div class="fa-icon">
                <a href="<?=base_url()?>CourseDetails"><i class="fa fa-table"></i></a>
              </div>
              <h4> View Courses </h4>
              <p> View all available course. </p>
            </div>
            
            <div class="col-lg-4 col-md-6 feature-item">
              <div class="fa-icon">
                <a href="<?=base_url()?>CourseEvaluation"><i class="fa fa-check-square-o"></i></a>
              </div>
              <h4> Course Evaluation </h4>
              <p> Submit course evaluation </p>
            </div>
            
            <div class="col-lg-4 col-md-6 feature-item">
              <div class="fa-icon">
                <a href="<?=base_url()?>ExamTimetable"><i class="fa fa-newspaper-o "></i></a>
              </div>
              <h4> Exam Transcript </h4>
              <p> View your exam transcript </p>
            </div>

            <div class="col-lg-4 col-md-6 feature-item">
              <div class="fa-icon">
                <a href="<?=base_url()?>CourseEnroll"><i class="fa fa-id-card "></i></a>
              </div>
              <h4> Enrol Course </h4>
              <p> Enrol a new course </p>
            </div>

            <div class="col-lg-4 col-md-6 feature-item">
              <div class="fa-icon">
                <a href="<?=base_url()?>AddResidentialApplication"><i class="fa fa-home"></i></a>
              </div>
              <h4> Residential Status </h4>
              <p> Request for college resident </p>
            </div>

            <div class="col-lg-4 col-md-6 feature-item">
              <div class="fa-icon">
                <a href="<?=base_url()?>StudentComplain"><i class="fa fa-inbox"></i></a>
              </div>
              <h4> Submit Complains </h4>
              <p> Submit a complain to FKI </p>
            </div>
          
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<hr>

<style>

.hero-section{
  height: auto;
  padding-bottom: 5rem;
}

.section-title{
  margin-top: 5rem;
}

.fa-icon{
  display:inline-flex;
  display:-webkit-inline-box;
  display:-ms-inline-flex;
  display:-ms-inline-box;
  width:87px;
  height:87px;
  border-radius:50%;
  background-color:#fca311;
  font-size:43px;
  color:#fff;
  align-items:center;
  -webkit-box-align:center;
  -webkit-box-pack:center;
  -ms-flex-align:center;
  -ms-flex-pack:center;
  justify-content:center;
  margin-bottom:40px;
}

.feature-item {
  text-align:center;
  margin-bottom:55px;
}

.feature-item h4 {
  margin-bottom:28px;
}

.feature-item .fa-icon {
  transform-origin: bottom-center;
  -webkit-transform-origin: bottom-center;
  -ms-transform-origin: bottom-center;
}

.feature-item .fa-icon:hover {
  transform-origin: bottom-center;
  -webkit-transform-origin: bottom-center;
  -ms-transform-origin: bottom-center;
  transform:scale(1.5);
  -webkit-transform:scale(1.5);
  -ms-transform:scale(1.5);
}


  </style>
<?php include_once('header.php');?>
<div class="py-5 shadow" style="background:linear-gradient(-40deg, lightblue 45%, transparent 45%)">
 <div class="container-fluid my-2">
<div class="row">
<div class="col-lg-6 my-auto">
<h1 class="display-3 font-weight-bold">Addmission Open for 2023-2024</h1>
<p class="py-lg-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi incidunt quia optio nam debitis, molestias distinctio quos aliquam et quam?</p>
<a href="" class="btn btn-lg btn-primary">Call to Action</a>
</div>
<div class="col-lg-6 ">
<div class="col-lg-8 mx-auto card shadow-md w-100">
<div class="card-body py-5">
<h3>Inquiry Form</h3>
<form action="" method="post" class="">
<!-- Material input -->
<div class="md-form">
  <input type="text" id="form1" class="form-control">
  <label for="form1">Your Name</label>
</div>
<!-- Material input -->
<div class="md-form">
  <input type="email" id="email" class="form-control">
  <label for="email">Your Email</label>
</div>
<!-- Material input -->
<div class="md-form">
  <input type="text" id="mobile" class="form-control">
  <label for="mobile">Your Mobile</label>
</div>
<!-- Material input -->
<div class="md-form">
  <!-- <input type="text" id="class" class="form-control"> -->
  <textarea name="" id="message" class="form-control md-textarea" rows="3"></textarea>
  <label for="message">Your Query</label>
</div>

<button class="btn btn-primary btn-block">Submit Form</button>
</form>
</div>
</div>
</div>
</div>
</div>
  </div>
  <!-- About us start -->
  <div class="py-5">
    <div class="container">
  <div class="row">
  <div class="col-lg-6 py-5">
  <h2 class="font-weight-bold">About <br> AbSchool Management System</h2>
  <div class="pr-5">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ipsa recusandae aut in eius similique nesciunt ad consectetur 
      sequi nihil exercitationem porro iusto natus voluptatibus amet placeat adipisci alias, nemo earum labore nobis doloremque nam quam sed impedit.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ipsa recusandae aut in eius similique nesciunt ad consectetur 
      sequi nihil exercitationem porro iusto natus voluptatibus amet placeat adipisci alias, nemo earum labore nobis doloremque 
       nam quam sed impedit.</p>
  </div>
  <a href="about-us.php" class="btn btn-secondary">Know More</a>
  </div>
  <div class="col-lg-6" style="background:url(./assets/img/open.jpg) center; background-repeat: no-repeat; ">

  </div>
</div>
  </div>
  </div>
  <!-- About us end -->
<!-- cources start -->
    <section class="py-5 bg-light">
    <div class="text-center mb-5">
    <h2 class="font-weight-bold">Our Courses</h2>
    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio ut libero id fugit laudantium voluptas.</p>
   </div>
   <div class="container">
    <div class="row">
      <?php for($i=0; $i < 12; $i++){   ?>
     <div class="col-lg-3">
      <div class="card">
        <div>
          <img src="./assets/img/web.jpg" alt="" class="img-fluid rounded-top">
        </div>
        <div class="card-body">
          <b>Web Design</b>
          <p class="card-text">
            <b>Duration: </b> 60 hours <br>
            <b>Couece Fee:</b> 10000/- Tk
          </p>
          <button class="btn btn-block btn-primary btn-sm">Enrool Now</button>
        </div>
      </div>
     </div>
     
     <?php }?>
     </div>
    </div>
  </section> 
<!-- cources end -->
<!-- Our teacher start -->
  <section class="py-5">
    <div class="text-center mb-5">
    <h2 class="font-weight-bold">Our Teacher</h2>
    <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio ut libero id fugit laudantium voluptas.</p>
   </div>
  
  <div class="container">
    <div class="row">
<?php for($i=0; $i<8; $i++) {?>
      <div class="col-lg-3 my-5">
        <div class="card">
        <div class="col-7 position-absolute" style="top: -50px">
              <img src="assets/img/placeholder.jpg" alt="" class="mw-100 border rounded-circle">
              </div>
          <div class="card-body pt-5 mt-4">
            <h5 class="card-title mb-0">Teacher's Name</h5>
            <p><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></p>
            <p class="card-text">
              <b>Courses: </b> 5 <br>
              <b>Rating: </b>
            </p>
            </div>
          </div>
        </div>
<?php }?>
      </div>
    </div>
  </div>
  </section>
  <!-- our teacher end -->
  <!-- achives start -->
  <section class="py-5 text-light"  style="background:#000000bb">
    <div >
      <div class="container">
        <div class="row">
          <div class="col-lg-6 pr-5">
            <h2>Acheivements</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, commodi laboriosam. Ullam aliquam dicta officiis accusamus.</p>

            <img src="./assets/img/book.jpg" alt="" class="img-fluid rounded">
          </div>
        
          <div class="col-lg-6 my-auto">
            <div class="row">
              <div class="col-lg-6 mb-4">
                <div class="border rounded">
                  <div class="card-body text-center">
                    <span><i class=" text-warning fas fa-graduation-cap fa-2x"></i></span>
                    <h2 class="my-2 font-weight-bold h1">334</h2>
                    <hr class="border-warning">
                    <h4>Graduates</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="border rounded">
                  <div class="card-body text-center">
                    <span><i class=" text-warning fas fa-graduation-cap fa-2x"></i></span>
                    <h2 class="my-2 font-weight-bold h1">334</h2>
                    <hr class="border-warning">
                    <h4>Graduates</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="border rounded">
                  <div class="card-body text-center">
                    <span><i class=" text-warning fas fa-graduation-cap fa-2x"></i></span>
                    <h2 class="my-2 font-weight-bold h1">334</h2>
                    <hr class="border-warning">
                    <h4>Graduates</h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="border rounded">
                  <div class="card-body text-center">
                    <span><i class=" text-warning fas fa-graduation-cap fa-2x"></i></span>
                    <h2 class="my-2 font-weight-bold h1">334</h2>
                    <hr class="border-warning">
                    <h4>Graduates</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- achives end -->
  <!-- Testimonials start -->
  <section class="py-5">
    <div class="text-center mb-5">
      <h2 class="font-weight-bold">What Pepole Says</h2>
      <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis obcaecati facilis nulla</p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="border rounded position-relative">
            <div class="p-4 text-center">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus corporis quasi dolorum officia illum, cumque quo accusamus expedita dignissimos eligendi libero eum perferendis quos, aliquid assumenda! Cumque a quis molestias.
            </div>
            <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left: .5rem; opacity:.2"></i>
          </div>
          <div class="text-center mt-n2-3">
            <img src="./assets/img/placeholder.jpg" alt="" class="rounded-circle border" width="100" height="100">
            <h6 class="mb-0 font-weight-bold">Name Of Candidate</h6>
            <p><i>Designation</i></p>
          </div>
        </div>
        <div class="col-6">
          <div class="border rounded position-relative">
            <div class="p-4 text-center">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus corporis quasi dolorum officia illum, cumque quo accusamus expedita dignissimos eligendi libero eum perferendis quos, aliquid assumenda! Cumque a quis molestias.
            </div>
            <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left: .5rem; opacity:.2"></i>
          </div>
          <div class="text-center mt-n2-3">
            <img src="./assets/img/placeholder.jpg" alt="" class="rounded-circle border" width="100" height="100">
            <h6 class="mb-0 font-weight-bold">Name Of Candidate</h6>
            <p><i>Designation</i></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonials end -->
  <?php include_once('footer.php');?>
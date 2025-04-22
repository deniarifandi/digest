    <?php include('landingComponent/1_header.php');?>

    <main class="main">

   <section id="hero" class="hero section dark-background" style="min-height: 20vh;">

      <img src="<?php echo base_url();?>assets/img/videosbg.jpg" alt="" class="hero-bg" data-aos="fade-in">

      <div class="container">
        <div class="row gy-4 d-flex justify-content-center">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2 data-aos="fade-up">Testimonial</h2>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <!-- <img src="<?php echo base_url();?>assets/img/heroicon.png" class="img-fluid mb-3 mb-lg-0" alt=""> -->
          </div>

        </div>
      </div>

    </section><!-- /Hero Section -->

    <section id="category" class="services section">

 <div class="row">
        <!-- Gallery Item -->
        <div class="col-md-3 mb-3">
            <div class="card">
                <div class="card-header">
                    <h3>Testimonial 1</h3>
                </div>
                <video controls>
                    <source src="<?php echo base_url()?>/assets/img/testimonials/1.mp4.txt" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card">
                <div class="card-header">
                    <h3>Testimonial 2</h3>
                </div>
                 <video controls>
                    <source src="<?php echo base_url()?>/assets/img/testimonials/2.mp4.txt" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card">
                <div class="card-header">
                    <h3>Testimonial 3</h3>
                </div>
                 <video controls>
                    <source src="<?php echo base_url()?>/assets/img/testimonials/3.mp4.txt" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>

         <div class="col-md-3 mb-3">
            <div class="card">
                <div class="card-header">
                    <h3>Testimonial 4</h3>
                </div>
                 <video controls>
                    <source src="<?php echo base_url()?>/assets/img/testimonials/4.mp4.txt" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>

    </section>

    <?php include('landingComponent/footer.php');?>
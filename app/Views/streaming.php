   
    <?php include('landingComponent/1_header.php');?>
  <main class="main">

  <section id="hero" class="hero section dark-background" style="">

      <div class="container">
        <div class="row gy-4 d-flex justify-content-center">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <video width="640" height="360" controls>
                <source src="http://digestadmin.sinarumi.co.id/assets/video/<?php echo $_GET['video']; ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <!-- <img src="<?php echo base_url();?>assets/img/heroicon.png" class="img-fluid mb-3 mb-lg-0" alt=""> -->
          </div>

        </div>
      </div>

    </section><!-- /Hero Section -->

  </main>

<?php include('landingComponent/footer.php');?>
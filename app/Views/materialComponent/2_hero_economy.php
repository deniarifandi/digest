 <section id="hero" class="hero section dark-background" style="">

      <img src="<?php echo base_url();?>assets/img/economybg.jpg" alt="" class="hero-bg" data-aos="fade-in">

      <div class="container">
        <div class="row gy-4 d-flex justify-content-center">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            
            <h2 data-aos="fade-up"><?= $subjects[0]->subject_name ?></h2>
            <p data-aos="fade-up" data-aos-delay="100"><?= $subjects[0]->description ?></p>

           <!--  <form action="https://drive.google.com/drive/folders/1AXlHT-Ff6cPqtU0SPkspsP2J8ER1qZGD?usp=sharing" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
              <input type="text" class="form-control" placeholder="Search <?= $subjects[0]->subject_name ?> Material">
              <button type="submit" class="btn btn-primary">Search</button>
            </form> -->

          

          </div>

          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <!-- <img src="<?php echo base_url();?>assets/img/heroicon.png" class="img-fluid mb-3 mb-lg-0" alt=""> -->
          </div>

        </div>
      </div>

    </section><!-- /Hero Section -->
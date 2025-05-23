 <section id="hero" class="hero section dark-background" style="height: 100vh;">

      <img src="<?php echo base_url();?>assets/img/flagbg.jpg" alt="" class="hero-bg" data-aos="fade-in">

      <div class="container">
        <div class="row gy-4 d-flex justify-content-center">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            
            <h2 data-aos="fade-up">Empowering <br>EMI Educators with Best Practice Material</h2>
            <p data-aos="fade-up" data-aos-delay="100">Digital English Instructional Material (DIGEST) is a material packaged in a digital video displayed through an application containing pedagogical strategies and best practices for teaching EMI classes.</p>
<!-- 
            <form action="https://drive.google.com/drive/folders/1AXlHT-Ff6cPqtU0SPkspsP2J8ER1qZGD?usp=sharing" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
              <input type="text" class="form-control" placeholder="Search Material" disabled>
              <button type="submit" class="btn btn-secondary" style="pointer-events: none;">Search</button>
            </form> -->

            <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="<?= $data['subjects']?>" data-purecounter-duration="2" class="purecounter">
                    <?= $data['subjects']?>
                      
                    </span>
                  <p>Subject</p>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end=" <?= $data['teachers']?>" data-purecounter-duration="2" class="purecounter"> <?= $data['teachers']?></span>
                  <p>Teachers</p>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end=" <?= $data['lessonPlans']?>" data-purecounter-duration="2" class="purecounter"> <?= $data['lessonPlans']?></span>
                  <p>Lesson Plans</p>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end=" <?= $data['students']?>" data-purecounter-duration="2" class="purecounter"> <?= $data['students']?></span>
                  <p>Students Enrolled</p>
                </div>
              </div><!-- End Stats Item -->

            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <!-- <img src="<?php echo base_url();?>assets/img/heroicon.png" class="img-fluid mb-3 mb-lg-0" alt=""> -->
          </div>

        </div>
      </div>

    </section><!-- /Hero Section -->
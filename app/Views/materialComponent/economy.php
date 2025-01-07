<section id="category" class="services section">

      
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span><?= $subjects[0]->subject_name ?> Material<br></span>
        <h2><?= $subjects[0]->subject_name ?>  Material</h2>
        <p>Check out our wide range of resources to help with your studies. Below are materials for our <?= $subjects[0]->subject_name ?> subject.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="<?php echo base_url();?>assets/img/economylessonplan.png" alt="" class="img-fluid">
              </div>
              <h3><a href="<?= base_url() ?>lesson_plan/<?= $subjects[0]->subject_id ?>" class="stretched-link" class="stretched-link">Lesson Plan</a></h3>
              <p>Lesson plan outlines activities and goals for teaching key concepts. It includes objectives, materials, and step-by-step instructions to help students understand objective principles and apply them to real-world situations. </p>
            </div>
          </div><!-- End Card Item -->

           <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="<?php echo base_url();?>assets/img/economycasestudy.png" alt="" class="img-fluid">
              </div>
              <h3><a href="<?= base_url() ?>case_study/<?= $subjects[0]->subject_id ?>" class="stretched-link" class="stretched-link">cases</a></h3>
              <p>A case study is a detailed examination of a specific instance or situation in a real-world context. It involves gathering information through methods like interviews and observations to explore complex issues. Commonly used in fields like business and education, case studies illustrate theoretical concepts and provide insights for decision-making.</p>
            </div>
          </div><!-- End Card Item -->

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="<?php echo base_url();?>assets/img/economy.png" alt="" class="img-fluid">
              </div>
              <h3><a href="<?= base_url() ?>presentation/<?= $subjects[0]->subject_id ?>" class="stretched-link" class="stretched-link">Presentations</a></h3>
              <p>visual tool used to communicate key concepts, data, and analyses related to economics. It typically includes slides covering topics such as supply and demand, market structures, economic indicators, and fiscal policies. </p>
            </div>
          </div><!-- End Card Item -->

          

          

        </div>

      </div>

    </section>
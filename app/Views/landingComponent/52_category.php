<section id="category" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Our Category<br></span>
        <h2>Our Category</h2>
        <p>Explore our extensive collection of resources tailored to support your subjects.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <?php foreach ($subjects as $subject): ?>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="card">
                <div class="card-img">

                  <img src="<?php echo "https://digestadmin.sinarumi.co.id/subjects/view/".$subject->image; ?>" alt="" class="img-fluid">
                </div>
                <h3><a href="<?= base_url() ?>material/<?= $subject->subject_id ?>" class="stretched-link"><?= $subject->subject_name ?></a></h3>
                <p><?= $subject->description ?></p>
              </div>
            </div><!-- End Card Item -->       
          <?php endforeach ?>

            

        </div>

      </div>

    </section>
   
    <?php include('landingComponent/1_header.php');?>
  <main class="main">

   <section id="hero" class="hero section dark-background" style="">

      <img src="<?php echo base_url();?>assets/img/economybg.jpg" alt="" class="hero-bg" data-aos="fade-in">

      <div class="container">
        <div class="row gy-4 d-flex justify-content-center">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            
            <h2 data-aos="fade-up"><?= $subjects[0]->subject_name ?></h2>
            <p data-aos="fade-up" data-aos-delay="100" class="mb-0"><?= $subjects[0]->description ?></p>
          </div>

          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <!-- <img src="<?php echo base_url();?>assets/img/heroicon.png" class="img-fluid mb-3 mb-lg-0" alt=""> -->
          </div>

        </div>
      </div>

    </section><!-- /Hero Section -->

   <section id="category" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span><?= $subjects[0]->subject_name ?> Presentations<br></span>
        <h2><?= $subjects[0]->subject_name ?>  Presentations</h2>
        <p>Check out our wide range of Presentations to help with your studies. Below are materials for our <?= $subjects[0]->subject_name ?>  subject.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

         <table class="table table-bordered">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Cases Desc</th>
                  <th>Subject</th>
                  <th>Download</th>
               </tr>
            </thead>
            <tbody>

               <?php foreach ($presentations as $presentation): ?>
                  <tr>
                     <td><?= $presentation->presentation_id ?></th>
                     <td><?= $presentation->description ?></th>
                     <td><?= $presentation->subject_name ?></th>
                     <td>
                        <?php if ($presentation->file != null): ?>
                           <a href="<?php echo "http://localhost/mms/public/lesson-plans/view/".$presentation->subject_id."/".$presentation->file ?>" alt="" class="img-fluid">Download
                           </a>   
                        <?php else: ?>
                           No File
                        <?php endif ?>
                        
                     </th>
                  </tr>   
               <?php endforeach ?>
               
               
            </tbody>
         </table>
   
        </div>

      </div>

    </section>

  </main>

<?php include('landingComponent/footer.php');?>
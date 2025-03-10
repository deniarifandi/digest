   
    <?php include('landingComponent/1_header.php');?>
  <main class="main">

   <section id="hero" class="hero section dark-background" style="">

      <img src="<?php echo base_url();?>assets/img/videosbg.jpg" alt="" class="hero-bg" data-aos="fade-in">

      <div class="container">
        <div class="row gy-4 d-flex justify-content-center">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2 data-aos="fade-up">Emi Videos</h2>
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
        <span>EMI Videos<br></span>
        <h2>EMI Videos</h2>
        <p>Check out our wide range of EMI Videos to help with your studies.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

         <table class="table table-bordered">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Cases Desc</th>
                  <th>Subject</th>
                  <th>View</th>
               </tr>
            </thead>
            <tbody>

               <?php foreach ($pedagogys as $pedagogy): ?>
                  <tr>
                     <td><?= $pedagogy->pedagogy_id ?></th>
                     <td><?= $pedagogy->description ?></th>
                     <td><?= $pedagogy->subject_name ?></th>
                     <td>
                        <?php if ($pedagogy->file != null): ?>
                           <a href="<?php echo base_url()."streaming?video=".$pedagogy->file ?>" alt="" class="img-fluid">View
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
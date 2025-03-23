   
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
                  <th>Video Desc</th>
                  
                  <th>View</th>
               </tr>
            </thead>
            <tbody>
               <?php if ($pedagogys[0]->subject_id == 9): ?>
                  <tr>
                     <td>1</td>
                     <td>GeoTechnical Engineering</td>
                     <td><a href="https://drive.google.com/file/d/1ATgGdVuxAe5KQ_Wp4Bgy0SGWfTB-PPe4/view?usp=sharing" target="_blank">View</a></td>
                  </tr>
               <?php endif ?>

               <?php if ($pedagogys[0]->subject_id == 4): ?>
                  <tr>
                     <td>1</td>
                     <td>Introduction to Bio-Chemistry</td>
                     <td><a href="https://drive.google.com/file/d/138gbS5XmHn64GhLZiUmODLkTEwPXg8C7/view?usp=sharing" target="_blank">View</a></td>
                  </tr>
               <?php endif ?>

               <?php if ($pedagogys[0]->subject_id == 7): ?>
                  <tr>
                     <td>1</td>
                     <td>Comparison of Government Systems Worldwide</td>
                     <td><a href="https://drive.google.com/file/d/1mFiQpk5NvK6sl_IAY-J_94aAsQTHyaL9/view?usp=sharing" target="_blank">View</a></td>
                  </tr>
                   <tr>
                     <td>2</td>
                     <td>Desc : Social Humaniora - Japanese Government</td>
                     <td><a href="https://drive.google.com/file/d/1sECfsSMLDnUYTWgj9RY6W6QzdtnQ5eO3/view?usp=sharing" target="_blank">View</a></td>
                  </tr>
               <?php endif ?>

               <?php if ($pedagogys[0]->subject_id == 11): ?>
                  <tr>
                     <td>1</td>
                     <td>deliver bad news to an employee</td>
                     <td><a href="https://drive.google.com/file/d/11tBKOOlp98AL4CO11gzhuTpEYA4UVoPx/view?usp=sharing" target="_blank">View</a></td>
                  </tr>
                  
               <?php endif ?>
                  
               <?php foreach ($pedagogys as $pedagogy): ?>
                  <tr>
                     <td><?= $pedagogy->pedagogy_id ?></th>
                     <td><?= $pedagogy->description ?></th>
                     
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
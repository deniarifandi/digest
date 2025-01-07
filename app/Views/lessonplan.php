   
    <?php include('landingComponent/1_header.php');?>
  <main class="main">

   <section id="category" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span><?= $subjects[0]->subject_name ?> Lesson Plan<br></span>
        <h2><?= $subjects[0]->subject_name ?>  Lesson Plan</h2>
        <p>Check out our wide range of Lesson Plan to help with your studies. Below are materials for our <?= $subjects[0]->subject_name ?>  subject.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

         <table class="table table-bordered">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Lesson Plan Desc</th>
                  <th>Subject</th>
                  <th>Download</th>
               </tr>
            </thead>
            <tbody>

               <?php foreach ($lesson_plans as $lesson_plan): ?>
                  <tr>
                     <td><?= $lesson_plan->lessonPlan_id ?></th>
                     <td><?= $lesson_plan->description ?></th>
                     <td><?= $lesson_plan->subject_name ?></th>
                     <td>
                        <?php if ($lesson_plan->file != null): ?>
                           <a href="<?php echo "http://localhost/mms/public/lesson-plans/view/".$lesson_plan->subject_id."/".$lesson_plan->file ?>" alt="" class="img-fluid">Download
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
<?php require('partials/head.php'); ?>


<?php foreach($dayplanner as $day):?>
        
        <li><?= $day->task; ?></li>
           
   <?php endforeach;?>

   <h1>Enter your Plans for Today </h1>

<form method="POST" action="/dayplanner">

        <input name="names"/>

        <button type="submit">submit</button>
        
</form>



<?php require ('partials/footer.php'); ?> 
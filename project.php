<?php 
require('config/config.php');
require('config/db.php');
include('inc/header.php');



// Get ID for single project

$id = mysqli_real_escape_string($conn, $_GET['id']);

$query = 'SELECT * FROM projects WHERE id =' . $id;

$result = mysqli_query($conn, $query);

$project = mysqli_fetch_assoc($result);

mysqli_free_result($result);

mysqli_close($conn);

?>
<div class="container">

        <div class="row">
            <div class="col-6"><h1 class="projectTitle"><?php echo $project['p_name'] ?> | <?php echo $project['p_type'] ?></h1>  <p>Problem: <?php echo $project['p_problem'] ?> </p></div>
            <div class="col-6"><img class="featuredImage" src="imgs/<?php echo $project['p_image'] ?>"> <button class="btn btn-primary">Visit Site</button>
           
            <?php echo $project['p_tech'] ?> 
            </div>
        </div>
</div>
<div class="container-fluid projectContainer">
<section class="backgroundColor">
    <div class="container">
        <div class="row">
            <div class="col-1"><p>Solution: </p></div>
            <div class="col-11"><p><?php echo $project['p_solution'] ?></p></div>
        </div>
        <div class="row">
            <div class="col-12"><p>My contributions: <?php echo $project['p_what'] ?></p></div>
        </div>
    </div>
</section>
</div>



    
    
   
   


<?php include('inc/footer.php') ?>
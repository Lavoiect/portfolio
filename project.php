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

<div class="headerDetails">
    <h1><?php echo $project['p_name'] ?> | <?php echo $project['p_type'] ?></h1>
</div>




    <p>Problem: <?php echo $project['p_problem'] ?> </p>
    <p>Solution: <?php echo $project['p_solution'] ?></p>
    <p>What I did: <?php echo $project['p_what'] ?></p>
    <p>Technology used: <?php echo $project['p_tech'] ?></p>
    <p>Proect Overview: <?php echo $project['p_overview'] ?></p>
    </form>


<?php include('inc/footer.php') ?>
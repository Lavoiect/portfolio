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



<h1>Work</h1>

    <p>Project:<?php echo $project['p_name'] ?> </p>
    <p>Problem: <?php echo $project['p_problem'] ?> </p>
    <p>Solution: <?php echo $project['p_solution'] ?></p>
    <p>What I did: <?php echo $project['p_what'] ?></p>
    <p>Technology used: <?php echo $project['p_tech'] ?></p>
    <p>Proect Overview: <?php echo $project['p_overview'] ?></p>
    </form>


<?php include('inc/footer.php') ?>
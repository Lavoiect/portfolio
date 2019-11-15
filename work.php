<?php 
require('config/config.php');
require('config/db.php');
include('inc/header.php');

$query = 'SELECT * FROM projects ORDER by id DESC';

$result = mysqli_query($conn, $query);

$workProjects = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($conn);

?>



<h1>Work</h1>


<?php foreach($workProjects as $work) : ?>
    <img class="thumbnail" src="imgs/<?php echo $work['p_image'] ?>">
    <p>Project Title:<?php echo $work['p_name'] ?> </p>
    <p>Problem: <?php echo $work['p_problem'] ?> </p>
    <p>Solution: <?php echo $work['p_solution'] ?></p>
    <p>What I did: <?php echo $work['p_what'] ?></p>
    <p>Technology used: <?php echo $work['p_tech'] ?></p>
    <p>Project Overview: <?php echo $work['p_overview'] ?></p>
    <a href="<?php echo URL_ROOT;?>project.php?id=<?php echo $work['id'] ?>">View More</a>
<?php endforeach; ?>


<?php include('inc/footer.php') ?>
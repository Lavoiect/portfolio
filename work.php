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




<div class="container">
<h1 class="workTitle">Some of <span class="highlight">My Recent Work</span></h1>
<div class="row">
<?php foreach($workProjects as $work) : ?>
    <div class="col-4 projects">

    <?php if($work['p_image'] === '' ) : ?>
    <p>No image</p>
<?php else : ?>
    <img class="thumbnail" src="imgs/<?php echo $work['p_image'] ?>">
<?php endif; ?>
        
        <p><?php echo $work['p_name'] ?> | <?php echo $work['p_type'] ?> </p>
        <a href="<?php echo URL_ROOT;?>project.php?id=<?php echo $work['id'] ?>">Project Details</a>
    </div>
<?php endforeach; ?>
</div>
</div>






<?php include('inc/footer.php') ?>
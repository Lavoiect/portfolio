<?php 
require('config/config.php');
require('config/db.php');
include('inc/header.php');

$query = 'SELECT * FROM projects ORDER by id DESC';

$result = mysqli_query($conn, $query);

$workProjects = mysqli_fetch_all($result, MYSQLI_ASSOC);

if(isset($_POST['delete'])){
    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

$query = "DELETE FROM projects WHERE id = {$delete_id}";

if(mysqli_query($conn, $query)) {
    header('Location: '.URL_ROOT.' ');
   } else {
    echo 'ERROR: '. mysqli_error($conn);
   }
}

mysqli_free_result($result);

mysqli_close($conn);
?>



<h1>Dashboard <i class="fas fa-columns"></i></h1>

<a class="btn btn-outline-primary" href="addWork.php">Add A work Project</a>

<?php foreach($workProjects as $work) : ?>
    <p>Project Title:<?php echo $work['p_name'] ?> </p>
    <a href="<?php echo URL_ROOT ?>editProject.php?id=<?php echo $work['id']?>">Edit</a>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <input type="hidden" name="delete_id" value="<?php echo $work['id']?>">
        <input type="submit" name="delete" value="Delete">
    </form>
<?php endforeach; ?>

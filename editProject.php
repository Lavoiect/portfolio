<?php 

require('config/config.php');
require('config/db.php');
include('inc/header.php');

// Check for Update submit

if(isset($_POST['submit'])){
    // Get form data
   $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
   $p_name = mysqli_real_escape_string($conn, $_POST['p_name']);
   $p_problem = mysqli_real_escape_string($conn, $_POST['p_problem']);
   $p_solution = mysqli_real_escape_string($conn, $_POST['p_solution']);
   $p_what = mysqli_real_escape_string($conn, $_POST['p_what']);
   $p_tech = mysqli_real_escape_string($conn, $_POST['p_tech']);
   $p_overview = mysqli_real_escape_string($conn, $_POST['p_overview']);
   
   

$query = "UPDATE projects SET p_name = '$p_name', p_problem = '$p_problem', p_solution = '$p_solution', p_what = '$p_what', p_tech = '$p_tech', p_overview = '$p_overview' WHERE id={$update_id}";

   if(mysqli_query($conn, $query)){
    header('Location: '.URL_ROOT.' ');
   } else {
       echo 'ERROR: '. mysqli_error($conn);
   }

}

// Get ID

$id = mysqli_real_escape_string($conn, $_GET['id']);

$query = 'SELECT * FROM projects WHERE id= ' . $id;

$results = mysqli_query($conn, $query);

$project = mysqli_fetch_assoc($results);

// var_dump($term);

mysqli_free_result($results);

mysqli_close($conn);



?>

<?php include 'includes/header.php' ?>

<h1>Add term</h1>

<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
    <label>Project:</label>
    <input type="text" name="p_name" value="<?php echo $project['p_name'] ?>">

    <label>Problem:</label>
    <input type="text" name="p_problem" value="<?php echo $project['p_problem'] ?>">

    <label>Solution:</label>
    <input type="text" name="p_solution" value="<?php echo $project['p_solution'] ?>">

    <label>What I did:</label>
    <input type="text" name="p_what" value="<?php echo $project['p_what'] ?>">

    <label>Technology Used:</label>
    <input type="checkbox" name="p_tech" value="Angular">
    <input type="checkbox" name="p_tech" value="HTML">
    <input type="checkbox" name="p_tech" value="CSS">
    

    <!-- 
    <input type="text" name="p_tech" value="<?php echo $project['p_tech'] ?>"> -->

    <label>Overview</label>
    <textarea id="" cols="30" rows="10" name="p_overview"><?php echo $project['p_overview']?></textarea>

    <input type="hidden" name="update_id" value="<?php echo $project['id']?>">
    <button type="submit" name="submit" value="submit">Add</button>
</form>
<?php 

require('config/config.php');
require('config/db.php');
include('inc/header.php');

// Check for submit

if(isset($_POST['submit'])){

    // Handle image upload
    $msg = '';
   $target = "imgs/".basename($_FILES['p_image']['name']);



    // Get form data
   $p_name = mysqli_real_escape_string($conn, $_POST['p_name']);
   $p_problem = mysqli_real_escape_string($conn, $_POST['p_problem']);
   $p_solution = mysqli_real_escape_string($conn, $_POST['p_solution']);
   $p_what = mysqli_real_escape_string($conn, $_POST['p_what']);
   $p_tech = mysqli_real_escape_string($conn, $_POST['p_tech']);
   $p_overview = mysqli_real_escape_string($conn, $_POST['p_overview']);
   $p_image = $_FILES['p_image']['name'];
   

   $query = "INSERT INTO projects(p_name, p_problem, p_solution, p_what, p_tech, p_overview, p_image) VALUES ('$p_name', '$p_problem', 
                                                                                                     '$p_solution', '$p_what',
                                                                                                     '$p_tech', '$p_overview', '$p_image')";

    // Move uploaded files to the images folder

    if(move_uploaded_file($_FILES['p_image']['tmp_name'], $target)){
        $msg = "Image uploaded successful";
    }else {
        $msg = "Failed to uploade image";
    }


   if(mysqli_query($conn, $query)){
    header('Location: '.URL_ROOT.' ');
   } else {
       echo 'ERROR: '. mysqli_error($conn);
   }

}


?>

<?php include 'includes/header.php' ?>

<h1>Add Project</h1>



<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
    <label>Project:</label>
    <input type="text" name="p_name">

    <label>Problem:</label>
    <input type="text" name="p_problem">

    <label>Solution:</label>
    <input type="text" name="p_solution">

    <label>What I did:</label>
    <input type="text" name="p_what">

    <label>Technology Used:</label>
    <input type="checkbox" name="p_tech" value="Angular">
    <input type="checkbox" name="p_tech" value="HTML">
    <input type="checkbox" name="p_tech" value="CSS">
    
    <label>Technology:</label>
    <input type="text" name="p_tech">

    <label>Overview</label>
    <textarea cols="30" rows="10" name="p_overview"></textarea>

    <input type="hidden" name="size" value="1000000">
    <input type="file" name="p_image">

    <button type="submit" name="submit" value="submit">Add</button>
</form>

<?php include('inc/footer.php'); ?>
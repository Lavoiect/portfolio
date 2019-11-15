<?php 
$conn = mysqli_connect(DB_HOST, USER, PASSWORD, DB_NAME);


if(mysqli_connect_errno()){
    echo 'Failed to connect to database ' . mysqli_connect_errno();
} else {

}
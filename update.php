<?php 
 
require_once 'connection.php';
 
if($_POST) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
 
    $id = $_POST['id'];
 
    $sql = "UPDATE tiffin SET tname = '$fname', description = '$lname', price = '$age', contact = '$contact' WHERE tname = '{$id}'";
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='../edit.php?id=".$id."'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }
 
    $connect->close();
 
}
 
?>
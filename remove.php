<?php 
 
require_once 'connection.php';
 
if($_GET['id']) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM tiffin WHERE tname = '{$id}'";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
 
    $connect->close();
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Remove Member</title>
</head>
<body>
 
<h3>Do you really want to remove ?</h3>
<form action="/tiffin/remove1.php" method="post">
 
    <input type="hidden" name="id" value="<?php echo $data['tname'] ?>" />
    <button type="submit">Save Changes</button>
    <a href="index.php"><button type="button">Back</button></a>
</form>
 
</body>
</html>
 
<?php
}
?>
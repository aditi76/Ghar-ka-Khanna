<?php 
 
require_once 'connection.php';
 
if($_GET['id']) {
    $id = $_GET['id'];
    print($id);
$sql = "SELECT * FROM tiffin WHERE tname='{$id}'";
    $result = $connect->query($sql);
    
    $data = $result->fetch_assoc();
    
    $connect->close();
    
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Edit Member</title>
 
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }
 
        table tr th {
            padding-top: 20px;
        }
    </style>
 
</head>
<body>
 
<fieldset>
    <legend>Edit Member</legend>
 
    <form action="/tiffin/update.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>TIFFIN SERVICE NAME</th>
                <td><input type="text" name="fname" placeholder="TIFFIN SERVICE NAME" value="<?php echo $data['tname'] ?>" /></td>
            </tr>     
            <tr>
                <th>DESCRIPTION</th>
                <td><input type="text" name="lname" placeholder="DESCRIPTION" value="<?php echo $data['description'] ?>" /></td>
            </tr>
            <tr>
                <th>PRICE</th>
                <td><input type="text" name="age" placeholder="PRICE" value="<?php echo $data['price'] ?>" /></td>
            </tr>
            <tr>
                <th>CONTACT</th>
                <td><input type="text" name="contact" placeholder="CONTACT NUMBER" value="<?php echo $data['contact'] ?>" /></td>
            </tr>
            <tr>
                <input type="hidden" name="id" value="<?php echo $data['tname']?>" />
                <td><button type="submit">Save Changes</button></td>
                <td><a href="index.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
 
</body>
</html>
 
<?php
}
?>
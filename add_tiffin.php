<?php require_once 'connection.php'; ?>
 
<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD</title>
 
    <style type="text/css">
        .manageMember {
            width: 50%;
            margin: auto;
        }
 
        table {
            width: 100%;
            margin-top: 20px;
        }
 
    </style>
 
</head>
<body>
 
<div class="manageMember">
    <a href="/TIFFIN/create.php"><button type="button">Add YOUR SERVICE INFO</button></a>
    <table border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>TIFFIN SERVICE NAME</th>
                <th>PRICE</th>
                <th>TYPE OF FOOD</th>
                <th>CONTACT NUMBER</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $id='DHWANI';
    $sql = "SELECT * FROM tiffin";
            $result = $connect->query($sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['tname']."</td>
                        <td>".$row['price']."</td>
                        <td> ".$row['description']."</td>
                        <td>".$row['contact']."</td>
                        <td>
                            <a href='/tiffin/edit.php?id=".$row['tname']."'><button type='button'>Edit</button></a>
                            <a href='/tiffin/remove.php?id=".$row['tname']."'><button type='button'>Remove</button></a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
 
</body>
</html>
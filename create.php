<!DOCTYPE html>
<html>
<head>
    <title>Add Member</title>
 
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
    <legend>Add Member</legend>
 
    <form action="p_create.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>TIFFIN SERVICE NAME</th>
                <td><input type="text" name="fname" placeholder="TIFFIN SERVICE NAME" /></td>
            </tr>     
            <tr>
                <th>DESCRIPTION</th>
                <td><input type="text" name="lname" placeholder="DESCRIPTION" /></td>
            </tr>
            <tr>
                <th>PRICE</th>
                <td><input type="text" name="age" placeholder="PRICE" /></td>
            </tr>
            <tr>
                <th>Contact</th>
                <td><input type="text" name="contact" placeholder="Contact" /></td>
            </tr>
            <tr>
                <td><button type="submit">Save Changes</button></td>
                <td><a href="index.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
 
</body>
</html>
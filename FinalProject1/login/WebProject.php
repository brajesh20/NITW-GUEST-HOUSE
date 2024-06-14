<?php
$servername="localhost";
$username="root";
$password="";
$db="webdevproject";

$conn=mysqli_connect($servername, $username, $password, $db) or die("Unable to connect");

if(isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['mobile']) && isset($_REQUEST['password'])) {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $mobile=$_REQUEST['mobile'];
    $password=$_REQUEST['password'];

    $sql="INSERT INTO usertable values ('$name', '$email', $mobile, '$password')";
    $res=mysqli_query($conn,$sql);
}

$sqll="SELECT * FROM usertable";
$result=$conn->query($sqll);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>User Data</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <?php
        if($result->num_rows > 0)
        {
            while($row = $result -> fetch_assoc())
            {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['mobile'] . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body> 
</html>

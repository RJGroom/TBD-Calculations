<?php
include "comm.php";
$sql = "SELECT * FROM contact";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        echo $row["ContactName"] . " whose email is " . $row["ContactEmail"] . " said this: <br>";
        echo $row["ContactComment"] . "<br>";
    }
}
?>
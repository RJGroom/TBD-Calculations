
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tips</title>
    <link rel="stylesheet" href="../node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="../navbar/navbarstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Open+Sans|Oswald|Raleway|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="commentsstyle.css">
</head>
<body>
    <p class="comments-content">
        <?php
        include "comm.php";
        $sql = "SELECT * FROM contact";
        $result = $conn->query($sql);
        
        if($result->num_rows > 0)   {
            while($row = $result->fetch_assoc())    {
                echo $row["ContactName"] . " whose email is " . $row["ContactEmail"] . " said this: <br>";
                echo $row["ContactComment"] . "<br>";
            }
        }
        ?>

    </p>
</body>
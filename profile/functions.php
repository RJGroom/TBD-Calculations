<?php 

require('../login/comm.php');

function getUserData($conn, $username) {
    $userData;
    $sql = "SELECT username, password, id, isAdmin, fName, lName, email FROM Users WHERE username ='" . $username . "'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = $result->fetch_assoc()) {
            $userData['username'] = $row['username'];
            $userData['password'] = $row['password'];
            $userData['id'] = $row['id'];
            $userData['isAdmin'] = $row['isAdmin'];
            $userData['fName'] = $row['fName'];
            $userData['lName'] = $row['lName'];
            $userData['email'] = $row['email'];
        }
        return $userData;
    }
    else {
        echo "User not found";
    }
}

?>
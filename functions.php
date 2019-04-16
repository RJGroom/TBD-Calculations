<?php 

require('./login/comm.php');

function getUserInfo($conn, $username) {
    $userInfo;
    $sql = "SELECT username, password, id, isAdmin, fName, lName, email, languagePreference FROM Users WHERE username ='" . $username . "'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = $result->fetch_assoc()) {
            $userInfo['username'] = $row['username'];
            $userInfo['password'] = $row['password'];
            $userInfo['id'] = $row['id'];
            $userInfo['isAdmin'] = $row['isAdmin'];
            $userInfo['fName'] = $row['fName'];
            $userInfo['lName'] = $row['lName'];
            $userInfo['email'] = $row['email'];
            $userInfo['languagePreference'] = $row['languagePreference'];
        }
        return $userInfo;
    }
    else {
        echo "User not found";
    }
}

?>
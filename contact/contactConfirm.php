<?php
    include 'comm.php';
    $contactName = $_REQUEST['contactName'];
    $contactEmail = $_REQUEST['contactEmail'];
    $contactComment = $_REQUEST['contactComment'];

    $sql = "INSERT INTO contact (ContactName, ContactEmail, ContactComment) VALUES ('$contactName', '$contactEmail', '$contactComment')";
    $result = $conn->query($sql);

    header("Location: contact.php");
?>
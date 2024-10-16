<?php

include 'connect.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    // Corrected the SQL query: Use backticks or no quotes for table name
    $sql3 = "DELETE FROM `admission` WHERE id = $id";

    $result3 = mysqli_query($con3, $sql3);

    if ($result3) {
        echo "Deleted successfully";
        header('location:admit000000000000000000000000000000000000000000000000000000history.php');
    } else {
        die(mysqli_error($con3));
    }
}

?>

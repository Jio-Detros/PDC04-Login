<?php

include "db_connection.php";

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $sql = "DELETE FROM users WHERE `user_id` = '$user_id' ";

        $result = $conn->query($sql);

        if ($result == TRUE) {
            echo " Record deleted Sucessfully!";

            

        }
        else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
}

?>

<!DOCTYPE html>
<html>
<a href="view.php" class="btn btn-primary mt-4">Back to User Page</a>
</html>

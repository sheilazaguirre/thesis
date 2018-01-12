<?php
    include '../config.php';

    if (isset($_GET['no']))
    {
        $id = $_GET['no'];

        if ($query = $con->prepare("DELETE FROM users WHERE studentNo = ? "))
        {
            $query->bind_param("i",$id);
            $query->execute();
            $query->close();
        }
        else
        {
            echo "ERROR: could not prepare SQL statement.";
        }
            $con->close();

            header("Location: index.php");
        }
        else
        {
        header("Location: index.php");
        }
?>

<?php
    include 'config.php';

    if (isset($_GET['no']))
    {
        $id = $_GET['no'];

        if ($query = $con->prepare("UPDATE assignments SET status = 'Archive' WHERE assignID = ? "))
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

            header("Location: facultyheaderfooter-AssignmentsVIEW.php");
        }
        else
        {
        header("Location: facultyheaderfooter-AssignmentsVIEW.php");
        }
?>
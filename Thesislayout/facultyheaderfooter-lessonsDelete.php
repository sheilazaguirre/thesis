<?php
    include 'config.php';

    if (isset($_GET['no']))
    {
        $id = $_GET['no'];

        if ($query = $con->prepare("UPDATE lessons SET status = 'Archive' WHERE lessonID = ? "))
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

            header("Location: facultyheaderfooter-LessonVIEW.php");
        }
        else
        {
        header("Location: facultyheaderfooter-LessonVIEW.php");
        }
?>
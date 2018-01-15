<?php
    include 'config.php';

    if (isset($_GET['no']))
    {
				$id = $_GET['no'];
				$mg = $_GET['midtermGrade'];
				$fg = $GET['finalGrade'];

        if ($query = $con->prepare("UPDATE classlist SET midtermGrade= $mg, finalGrade= $fg WHERE classlistID = ?"))
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

            header("Location: facultyheaderfooter-grades.php");
        }
        else
        {
        header("Location: facultyheaderfooter-grades.php");
        }
?>
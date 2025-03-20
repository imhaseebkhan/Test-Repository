<?php

if(isset($_GET["id"]))
{

    $id = $_GET["id"];

    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "students";
    $conn = "";

    $conn = mysqli_connect($server, $user, $pass, $dbname);

    $sql = "DELETE FROM studentsdata WHERE id = $id";
    $conn->query($sql);

}

header("location: index.php");
exit;



?>
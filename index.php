<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="stm"><h1>Student Management System</h1></div>

<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "students";
    $conn = "";
    try{
      $conn = mysqli_connect($server, $user, $pass, $dbname);

    }
    catch(Exception){
      
      echo "could not conect";
    }
    
    if($conn)
    {
        echo "You are connected";
    }

    //read all rows from database table
    $sql = "SELECT * FROM studentsdata";

    //run query and save result in result variable
    $result = $conn->query($sql);

    //checks if there is any error in executing the query

    if(!$result){

      //if error stop the process and display error message
      die("invalid query: ". $conn->error);

    }

    echo $tabledata = "

    <table>
  <thead>
    <tr>
      
      <th>Name</th>
      <th>Email</th>
      <th>Phone Number</th>
      <th>Date Creation</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    
    
    ";


    

    

    while($row = $result->fetch_assoc())
    {

      echo  "
      
  
    <tr>
      
      <td>$row[name]</td>
      <td>$row[email]</td>
      <td>$row[phone]</td>
      <td>$row[created_at]</td>
      <td> 

          <a href=/CRUDops/edit.php?id=$row[id]>Edit</a> |
          <a href=/CRUDops/delete.php?id=$row[id]>Delete</a>
          
          
      </td>
    </tr>";
    

    }

    echo  "</tbody>
          </table>";

?>





    
</body>
</html>
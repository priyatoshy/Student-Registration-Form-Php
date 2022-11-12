<?php
    $insert = false;
    if(isset($_POST['name']))

    $server="localhost";
    $username="root";
    $password="";

    $conn=mysqli_connect($server,$username,$password);

    if(!$conn){
        echo "Faliure";
    }
    else{
        echo "<br>";
    }

    $name=$_POST['name'];
    $age=$_POST['age'];
    $year=$_POST['year'];
    $roll=$_POST['roll'];
    $department=$_POST['department'];

    
    
    $sql="INSERT INTO `students`.`student` ( `name`, `age`, `year`, `roll`, `department`, `regdate`) VALUES ('$name','$age','$year','$roll','$department', current_timestamp())";
    //echo $sql;
    if($conn->query($sql)==true){
        $insert=true;
    }
    else{
        //echo "ERROR: $sql <br> $conn->error";
    }

    // Close the database connection
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <p>
        Student Registration Form
    </p>
    <?php
        if($insert == true){
        echo "<p>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
    ?>

    <form action="index.php" method="post">
        <!--Student Name -->
        
        <label for="name">Student Name: </label>
        <input type="text" name="name" id="name" placeholder="Enter Your Name: " >
        <br>
        <br>
        <!--Student Age -->
        <label for="age">Student Age: </label>
        <input type="text" name="age" id="age" placeholder="Enter Your Age" >
        <br>
        <br>
        <!--Student Year -->
        <label for="year">Student Year: </label>
        <input type="text" name="year" id="year" placeholder="Enter Your the year your studying in..." >
        <br>
        <br>
        <!--Student Role -->
        <label for="roll">Student Roll Number: </label>
        <input type="text" name="roll" id="roll" placeholder="Enter Your Roll Number" >
        <br>
        <br>
        <!--Student Department -->
        <label for="department">Student Department: </label>
        <input type="text" name="department" id="department" placeholder="Enter Your Department..." >
        <br>
        <br>
        <!--Sunmission-->
        <button class="btn">Submit</button>
        <button class="btn">Reverse</button>
        </form>
        </div>
    
     
</body>
</html>
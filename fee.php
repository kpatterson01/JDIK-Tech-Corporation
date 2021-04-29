<?php
    //Bubble Sort 
    $array = $_POST['array']; 
?>
<html>
<head>
    <title>Fee</title>
    <link rel="stylesheet" href="home.css">
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style>
        textarea {
            margin-left: 50%; 
            text-align: center; 
            background-color: lightgrey; 
        }

    </style>

</head>

<body>
    <!--Banner-->
    <div id="banner">
        <div id="title">
            Summers Middle School 
        </div>
        <div id="motto">
            <i>"No Child left behind no matter what!" Est. 2000</i>
        </div>
    </div>
 
    <div class="sidebar">
        <h1 id="name">Welcome Bruce Wayne!</h1>
        <a href="home.php"><i class="fa fa-fw fa-home"></i>Home</a>
        <a href="students.php"><i class="fa fa-fw fa-user"></i> Students</a>
        <a href="teacher.php"><i class="fa fa-fw fa-user"></i> Teachers</a>
        <a href="attendance.php"><i class="fa fa-fw fa-user"></i> Attendance</a>
        <a href="#mailto:Students"><i class="fa fa-fw fa-envelope"></i> Email</a>
        <a href="#contact"><i class="fa fa-fw fa-money"></i> Fees</a>
        <a href="grade.php">Grades</a>

    </div>
    <h1 id="student-title">
        Student Fees 
    </h1>
<textarea rows="20" cols="50">

<?php

    class MyDB extends SQLite3 {
        function __construct() {
           $this->open('Student_Management.db');
        }
     }
     $db = new MyDB();
     if(!$db) {
        echo $db->lastErrorMsg();
     } else {
        //echo "Opened database successfully\n";
     }
     $sql =<<<EOF
      SELECT * from Fee;
    EOF;
    $ret = $db->query($sql);

    
    while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
       echo " Fee ID: ". $row['fee_id'] . "\n";
       echo "Amount:". $row['amount'] . "\n";
       echo "Student ID:". $row['student_id'] . "\n";
       echo "Type:".$row['type']  . "\n";
       echo "Timestamped:".$row['time'] . "\n";
       echo "Date:".$row['date'];
       echo "\n\n\n"; 
       //echo "<tr><td>" . $row['teacher_id'] . "<tr><td>"  . $row['name'] . "<tr><td>" . $row['email_address'] . "<tr><td>" . $row['password'] . "<tr><td>"; 
    }
   
    echo "</textarea>"; 
    //echo "Operation done successfully\n";
    $db->close();

    //print unsorted array
    /*
    echo "Is this correct <br>"; 
    $id = $array[0]; 
    $password = $array[1]; 

    for ($i = 0; $i < count($array); $i++)
        echo $array[$i]." "; */
?> 


    <script src="home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html> 
    
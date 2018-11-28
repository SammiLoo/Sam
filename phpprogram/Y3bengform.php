<html>
<body>

<?php

    $student_ID = $_POST['student_ID'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $year_stud = $_POST['year_stud'];
    $meng_beng = $_POST['meng_beng'];
    $contact_num = $_POST['contact_num'];
    $tutor = $_POST['tutor'];
    if (!empty($student_ID) || !empty($fullname) || !empty($email) || !empty($department) || !empty($year_stud) || !empty($meng_beng) || !empty($contact_num) || !empty($tutor)) 
    {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "heydudeissammi41";
        $dbname = "mystore";
        
        //create connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()){
            die('Connect Error! ('. mysqli_connect_errno() .') '. mysqli_connect_error());
        }
        else {
            $sql = "INSERT INTO students (student_ID, fullname, email, department, year_stud, meng_beng, contact_num, tutor)
            values ('$student_ID','$fullname','$email','$department','$year_stud','$meng_beng','$contact_num','$tutor')";
            if ($conn->query($sql)){
                
            }
            else{
            echo("Error: ". $sql ."<br>". $conn->error);
            }
            $conn->close();
        }
    }

    else
    {
        echo "All fields are required";
        die();
    }
 
?>

</body>
</html>
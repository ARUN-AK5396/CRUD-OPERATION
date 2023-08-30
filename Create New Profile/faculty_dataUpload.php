<?php
    $host = '';
    $username = '';
    $password = '';
    $dbname = '';
    $con = mysqli_connect("$host", "$username", "", "$dbname");
    // $select_query = "SELECT * FROM erp_student WHERE stu_id='950320104005'";
    // $result = mysqli_query($con, $select_query);
    // $row = [];
    // if ($result->num_rows > 0) {
    //     $row = $result->fetch_assoc();
    // }

    // Check the database connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        // Retrieve data from the HTML form
        $f_id = $_POST['f_id'];
        $f_role=$_POST['role'];
        $f_dob = $_POST['date_of_birth'];
        $f_fname = $_POST['first_name'];
        $f_lname = $_POST['last_name'];
        $f_dept = $_POST['dept'];
       
        $sql = "INSERT INTO `` ";

        

        if ($con->query($sql) === TRUE) {
            echo "Data inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
        
      
        $con->close();
        ?>

    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <a style="margin-top: 15px; margin-left:40px;"  class="btn btn-primary" href="../index.php" class=""> Go home</a>
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
        $stu_id = $_POST['reg_no'];
        $cls_id = $_POST['cls_id'];
        $stu_dob = $_POST['date_of_birth'];
        $stu_fname = $_POST['first_name'];
        $stu_lname = $_POST['last_name'];
        $stu_gender= $_POST['gender'];
        

        $stu_img_path = '';
        $stu_fatherimg_path = '';
        $stu_motherimg_path = '';
        $stu_guardianimg_path = '';

        if ($_FILES['student_image']['error'] === UPLOAD_ERR_OK) {
            $target_dir = '../Assets/Student_Images/';
            $stu_id = $_POST['reg_no']; // Assuming 'reg_no' is the student ID
            $image_extension = pathinfo($_FILES['student_image']['name'], PATHINFO_EXTENSION);
            $target_filename = $stu_id . '.' . $image_extension; // Using stu_id as the filename
            $stu_img_path = $target_dir. $target_filename;
        
            if (move_uploaded_file($_FILES['student_image']['tmp_name'], $stu_img_path)) {
                $student_image_name = $target_filename;
                echo " Student Image uploaded successfully!";
            } else {
                echo "Image upload failed.";
            }
        }

        if ($_FILES['father_image']['error'] === UPLOAD_ERR_OK) {
            $target_dir = '../Assets/Father_Images/';
            $stu_id = $_POST['reg_no']; // Assuming 'reg_no' is the student ID
            $image_extension = pathinfo($_FILES['father_image']['name'], PATHINFO_EXTENSION);
            $target_filename = $stu_id . '_father.' . $image_extension; // Using stu_id as part of the filename
            $stu_fatherimg_path =$target_dir. $target_filename;
        
            if (move_uploaded_file($_FILES['father_image']['tmp_name'], $stu_fatherimg_path)) {
                $father_image_name = $target_filename;
                echo "Father image uploaded successfully!";
            } else {
                echo "Father image upload failed.";
            }
        }
        
        if ($_FILES['mother_image']['error'] === UPLOAD_ERR_OK) {
            $target_dir = '../Assets/Mother_Images/';
            $stu_id = $_POST['reg_no']; // Assuming 'reg_no' is the student ID
            $image_extension = pathinfo($_FILES['mother_image']['name'], PATHINFO_EXTENSION);
            $target_filename = $stu_id . '_mother.' . $image_extension; // Using stu_id as part of the filename
            $stu_motherimg_path =$target_dir. $target_filename;
        
            if (move_uploaded_file($_FILES['mother_image']['tmp_name'], $stu_motherimg_path)) {
                $mother_image_name = $target_filename;
                echo "Mother image uploaded successfully!";
            } else {
                echo "Mother image upload failed.";
            }
        }
        
        if ($_FILES['guardian_image']['error'] === UPLOAD_ERR_OK) {
            $target_dir = '../Assets/Guardian_Images/';
            $stu_id = $_POST['reg_no']; // Assuming 'reg_no' is the student ID
            $image_extension = pathinfo($_FILES['guardian_image']['name'], PATHINFO_EXTENSION);
            $target_filename = $stu_id . '_guardian.' . $image_extension; // Using stu_id as part of the filename
            $stu_guardianimg_path =$target_dir. $target_filename;
        
            if (move_uploaded_file($_FILES['guardian_image']['tmp_name'], $stu_guardianimg_path)) {
                $guardian_image_name = $target_filename;
                echo "Guardian image uploaded successfully!";
            } else {
                echo "Guardian image upload failed.";
            }
        }
        
        // $log_secqn = $_POST['security-question'];
        // $log_ans = $_POST['security-answer'];
        
        // Prepare an SQL query
        $sql = "INSERT INTO `` ";
                          


        
        // Execute the query
        if ($con->query($sql) === TRUE) {
            echo "Data Uploaded Successfully !!!";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
        

       
        
        // Close the database connection
        $con->close();
        ?>

    <head>
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <a style="margin-top: 15px; margin-left:40px;"  class="btn btn-primary" href="../index.php" class=""> Go home</a>
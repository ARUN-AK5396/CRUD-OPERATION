<?php
     $servername = "";
     $username = "";
     $password = "";
     $dbname = "";
 
     $conn = mysqli_connect($servername,$username,$password,$dbname);
    $id = $_GET['stu_id'];

if(isset($_POST['submit'])){
        $stu_id = $_POST['reg_no'];
        $cls_id = $_POST['clas_id'];
        $stu_dob = $_POST['date_of_birth'];
        $stu_fname = $_POST['first_name'];
        $stu_lname = $_POST['last_name'];
        $stu_gender= $_POST['gender'];
        $stu_mobile = $_POST['mobile'];

        $stu_img_path = '';
        $stu_fatherimg_path = '';
        $stu_motherimg_path = '';
        $stu_guardianimg_path = '';

        if ($_FILES['student_image']['error'] === UPLOAD_ERR_OK) {
            $target_dir = '../Assets/Student_Images/';
            $stu_id = $_POST['reg_no']; // Assuming 'reg_no' is the student ID
            $image_extension = pathinfo($_FILES['student_image']['name'], PATHINFO_EXTENSION);
            $target_filename = $stu_id . '.' . $image_extension; // Using stu_id as the filename
            $stu_img_path = $target_dir . $target_filename;

            if (file_exists($stu_img_path)) {
                unlink($stu_img_path);
            }

            if (move_uploaded_file($_FILES['student_image']['tmp_name'], $stu_img_path)) {
                $student_image_name = $target_filename;
                echo "Student Image uploaded successfully!";
            } else {
                echo "Image upload failed.";
            }
        }

        if ($_FILES['father_image']['error'] === UPLOAD_ERR_OK) {
          $target_dir = '../Assets/Father_Images/';
          $stu_id = $_POST['reg_no']; // Assuming 'reg_no' is the student ID
          $image_extension = pathinfo($_FILES['father_image']['name'], PATHINFO_EXTENSION);
          $target_filename = $stu_id . '.' . $image_extension; // Using stu_id as the filename
          $stu_fatherimg_path = $target_dir . $target_filename;

         
          if (file_exists($stu_fatherimg_path)) {
              unlink($stu_fatherimg_path);
          }

          if (move_uploaded_file($_FILES['father_image']['tmp_name'], $stu_fatherimg_path)) {
              $father_image_name = $target_filename;
              echo "Father Image uploaded successfully!";
          } else {
              echo "Image upload failed.";
          }
      }

      if ($_FILES['mother_image']['error'] === UPLOAD_ERR_OK) {
        $target_dir = '../Assets/Mother_Images/';
        $stu_id = $_POST['reg_no']; // Assuming 'reg_no' is the student ID
        $image_extension = pathinfo($_FILES['mother_image']['name'], PATHINFO_EXTENSION);
        $target_filename = $stu_id . '.' . $image_extension; // Using stu_id as the filename
        $stu_motherimg_path = $target_dir . $target_filename;

       
        if (file_exists($stu_motherimg_path)) {
            unlink($stu_motherimg_path);
        }

        if (move_uploaded_file($_FILES['mother_image']['tmp_name'], $stu_motherimg_path)) {
            $mother_image_name = $target_filename;
            echo "mother Image uploaded successfully!";
        } else {
            echo "Image upload failed.";
        }
    }

    if ($_FILES['guardian_image']['error'] === UPLOAD_ERR_OK) {
      $target_dir = '../Assets/Guardian_Images/';
      $stu_id = $_POST['reg_no']; // Assuming 'reg_no' is the student ID
      $image_extension = pathinfo($_FILES['guardian_image']['name'], PATHINFO_EXTENSION);
      $target_filename = $stu_id . '.' . $image_extension; // Using stu_id as the filename
      $stu_guardianimg_path = $target_dir . $target_filename;

      if (file_exists($stu_guardianimg_path)) {
          unlink($stu_guardianimg_path);
      }

      if (move_uploaded_file($_FILES['guardian_image']['tmp_name'], $stu_guardianimg_path)) {
          $guardian_image_name = $target_filename;
          echo "guardiant Image uploaded successfully!";
      } else {
          echo "Image upload failed.";
      }
  }



    // Prepare an SQL query
    $sql = "UPDATE `` SET `` WHERE  = $id";

    $result = mysqli_query($conn,$sql);

    if($result){
        header("location: done.php?msg=User data uptaded successfully");

    }
    else{
        echo "Failed : ".mysqli_error($conn);
    }
}
?>

<!Doctype html>
<html>

<head>
    <title>Edit user details</title>

    <style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color:#e3ad39;
  border-radius: 27px;
  color: #fff;
  border-color: #bd8200;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color:#f0a500;
  border-radius: 27px;
  color: #fff;
  border-color: #bd8200;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
*,
    *:before,
    *:after {
      box-sizing: border-box;
    }
    body {
      padding: 1em;
      font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 15px;
      color: #b9b9b9;
      background-color: #e3e3e3;
    }
    h4 {
      color: #f0a500;
    }
    span{
      color: #636363;
    }
    input,
    input[type="radio"] + label,
    input[type="checkbox"] + label:before,
    select option,
    select {
      width: 40%;
      padding: 1em;
      line-height: 1.4;
      background-color: #f9f9f9;
      border: 1px solid #e5e5e5;
      border-radius: 27px;
      -webkit-transition: 0.35s ease-in-out;
      -moz-transition: 0.35s ease-in-out;
      -o-transition: 0.35s ease-in-out;
      transition: 0.35s ease-in-out;
      transition: all 0.35s ease-in-out;
    }
    input:focus {
      outline: 0;
      border-color: #bd8200;
    }
    input:focus + .input-icon i {
      color: #f0a500;
    }
    input:focus + .input-icon:after {
      border-right-color: #f0a500;
    }
    input[type="radio"] {
      display: none;
    }
    input[type="radio"] + label,
    select {
      display: inline-block;
      border-radius: 30px;
      width: 21%;
      margin-right: 20px;
      margin-top: 13px;
      margin-left: 20px;
      text-align: center;
      border-radius: 0;
    }
    input[type="radio"] + label:first-of-type {
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;
    }
    input[type="radio"] + label:last-of-type {
      border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
    }
    input[type="radio"] + label i {
      padding-right: 1.4em;
    }
    input[type="radio"]:checked + label,
    input:checked + label:before,
    select:focus,
    select:active {
      background-color: #f0a500;
      color: #fff;
      border-color: #bd8200;
    }
    input[type="submit"]{
        margin-left: 30%;
        width: 26%;
        border-radius: 28px;
        background-color: #4352da;
        color: #fff;
    }
    input[type="checkbox"] {
      display: none;
    }
    input[type="checkbox"] + label {
      position: relative;
      display: block;
      padding-left: 1.6em;
    }
    input[type="checkbox"] + label:before {
      position: absolute;
      top: 0.2em;
      left: 0;
      display: block;
      width: 1em;
      height: 1em;
      padding: 0;
      content: "";
    }
    input[type="checkbox"] + label:after {
      position: absolute;
      top: 0.45em;
      left: 0.2em;
      font-size: 0.8em;
      color: #fff;
      opacity: 0;
      font-family: FontAwesome;
      content: "\f00c";
    }
    input:checked + label:after {
      opacity: 1;
    }
    select {
      height: 3.4em;
      line-height: 2;
    }
    select:first-of-type {
      border-top-left-radius: 3px;
      border-bottom-left-radius: 3px;
    }
    select:last-of-type {
      border-top-right-radius: 3px;
      border-bottom-right-radius: 3px;
    }
    select:focus,
    select:active {
      outline: 0;
    }
    select option {
      background-color: #f0a500;
      color: #fff;
    }
    .input-group {
      margin-bottom: 1em;
      zoom: 1;
    }
    .input-group:before,
    .input-group:after {
      content: "";
      display: table;
    }
    .input-group:after {
      clear: both;
    }
    .input-group-icon {
      position: relative;
    }
    .input-group-icon input {
      padding-left: 4.4em;
    }
    .input-group-icon .input-icon {
      position: absolute;
      top: 0;
      left: 0;
      width: 3.4em;
      height: 3.4em;
      line-height: 3.4em;
      text-align: center;
      pointer-events: none;
    }
    .input-group-icon .input-icon:after {
      position: absolute;
      top: 0.6em;
      bottom: 0.6em;
      left: 3.4em;
      display: block;
      border-right: 1px solid #e5e5e5;
      content: "";
      -webkit-transition: 0.35s ease-in-out;
      -moz-transition: 0.35s ease-in-out;
      -o-transition: 0.35s ease-in-out;
      transition: 0.35s ease-in-out;
      transition: all 0.35s ease-in-out;
    }
    .input-group-icon .input-icon i {
      -webkit-transition: 0.35s ease-in-out;
      -moz-transition: 0.35s ease-in-out;
      -o-transition: 0.35s ease-in-out;
      transition: 0.35s ease-in-out;
      transition: all 0.35s ease-in-out;
    }
    .container {
      max-width: 38em;
      padding: 1em 3em 2em 3em;
      margin: 0em auto;
      background-color: #fff;
      border-radius: 4.2px;
      box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);
    }
    .row {
      zoom: 1;
    }
    .row:before,
    .row:after {
      content: "";
      display: table;
    }
    .row:after {
      clear: both;
    }
    .col-half {
      padding-right: 10px;
      float: left;
      width: 50%;
    }
    .col-half:last-of-type {
      padding-right: 0;
    }
    .col-third {
      padding-right: 10px;
      float: left;
      width: 33.33333333%;
    }
    .col-third:last-of-type {
      padding-right: 0;
    }
    .image_text{
      position: absolute;
     margin-top: 70px ; 
    }
    .images{
      position: absolute;
      height: 120px;
      width: 120px;
      border-radius: 50%;
      margin-top: 10px;
      margin-left: 120px;
    }
    .image_upload_text{
      position: absolute;
      margin-left: 280px;
      margin-top: 50px;
      width: 50%;
    }
    @media only screen and (max-width: 540px) {
      .col-half {
        width: 100%;
        padding-right: 0;
      }
    }
        input[type=button] :hover{
            background-color: #fff;
            color: #4352da;
        }
  @media only screen and (min-device-width : 268px) and (max-device-width : 1224px) {

          .tab-content div {
              position: fixed;
              box-sizing: initial;
              width: 60%;
              height: 80%;
              display: none;
              margin-left: 30%;
              margin-right: 100px;
              background-color: #fff;
              padding: 20px;
              float: right;
              margin-top: 60px;
              border-radius: 20px;
              box-shadow: 5px 5px 5px 5px #b6bab7;
          }

          input,
          input[type="radio"] + label,
          input[type="checkbox"] + label:before,
          select option,
          select { 
            width: 97%;
            padding: 1em;
            line-height: 1.6;
            background-color: #f9f9f9;
            border: 1px solid #e5e5e5;
            border-radius: 27px;
            -webkit-transition: 0.35s ease-in-out;
            -moz-transition: 0.35s ease-in-out;
            -o-transition: 0.35s ease-in-out;
            transition: 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;
          }
          .tab-content div.active {
              display: block;

          }
          input[type="checkbox"] {
          display: none;
          }
          input[type="checkbox"] + label {
          position: relative;
          display: block;
          padding-left: 1.6em;
          }
          input[type="checkbox"] + label:before {
          position: absolute;
          top: 0.2em;
          left: 0;
          display: block;
          width: 1em;
          height: 1em;
          padding: 0;
          content: "";
          }
          input[type="checkbox"] + label:after {
          position: absolute;
          top: 0.45em;
          left: 0.2em;
          font-size: 0.8em;
          color: #fff;
          opacity: 0;
          font-family: FontAwesome;
          content: "\f00c";
          }
        }
        .hide {
            display: none;
          }
          .quota{
            display: none;
          }
</style>
</head>

<body> 
             <?php
                $sql = "SELECT * FROM `erp_student` WHERE stu_id = $id LIMIT 1";
                $result = mysqli_query($conn , $sql);
                $row = mysqli_fetch_assoc($result);
              ?>
   
     <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Profile Page')">Profile Page</button>
            <button class="tablinks" onclick="openCity(event, 'Address Details')">Address Details</button>
            <button class="tablinks" onclick="openCity(event, 'Contact Information')">Contact Information</button>
            <button class="tablinks" onclick="openCity(event, 'General Information')">General Information</button>
            <button class="tablinks" onclick="openCity(event, 'Health Information')">Health Information</button>
            <button class="tablinks" onclick="openCity(event, 'Paasport Information')">Passport Information</button>
            <button class="tablinks" onclick="openCity(event, 'Bank Information')">Bank and Other Information</button>
            <!-- <button class="tablinks" onclick="openCity(event, 'login Information')">Login Information</button> -->
            
    </div>


            <form method="post" action=""  enctype="multipart/form-data">
                <div id="Profile Page" class="tabcontent">
                    <h2 style="text-align: center;"> Profile Page</h2><br>
                          <!-- <span>User Role :</span><select name="user_role">
                                                <option selected>Select</option>
                                               <option id="student" value="student">Student</option>
                                                <option id="Staff" value="Staff">Staff</option>
                                                </select><br><br>
                          <span>Batch : </span><span><select name="batch">
                                                <option selected id="2020-2024" value="2020-2024" >2020 - 2024</option>
                                                <option id="2021-2025" value="2021-2025">2021 - 2025</option>
                                                <option id="2022-2026" value="2022-2026">2022 - 2026</option>
                                                <option id="2023-2027" value="2023-2027">2023 - 2027</option>
                                                <option id="2024-2028" value="2024-2028">2024 - 2028</option>
                                                </select><br><br> -->
                        <span>First Name* : </span><input type="text"  name="first_name" value="<?php echo $row['stu_fname'];?>"><br><br>
                        <span>Last Name : </span><input type="text" name="last_name" value="<?php echo $row['stu_lname'];?>"><br><br>
                        <span>Register Number* :</span><input type="text"  name="reg_no" value="<?php echo $row['stu_id'];?>"><br><br>
                        <span>Class ID* :</span><input type="text"  name="cls_id" value="<?php echo $row['cls_id'];?>"><br><br>
                        <span>Date of Birth* :</span><input type="date"  name="date_of_birth" value="<?php echo $row['stu_dob'];?>"><br><br>
                        <span>Father Name* : </span><input type="text"  name="father_name" value="<?php echo $row['stu_father'];?>"><br><br>
                        <span>Mother Name* : </span><input type="text"  name="mother_name" value="<?php echo $row['stu_mother'];?>"><br><br>
                        <span>Guardian Name* : </span><input type="text"  name="guardian_name" value="<?php echo $row['stu_guardian'];?>"><br><br>
                        <span>Mother Tongue* : </span><input type="text"  name="mother_lang" value="<?php echo $row['stu_mlang'];?>"><br><br>
                        <span>College Transport : </span><input type="radio" id="college_transport" name="transport" value="Yes" <?php echo($row['stu_transport']=='Yes')? "Checked" : "" ?>>
                                             <label for="college_transport">Yes</label>
                                             <input type="radio" id="own" name="transport" value="No" <?php echo($row['stu_transport']=='No')? "Checked" : "" ?>>
                                             <label for="own">No</label><br><br>
                        <span>Gender : </span><input type="radio" id="male" name="gender" value="Male" <?php echo($row['stu_gender']=='Male')? "Checked" : "" ?>>
                                             <label for="male">Male</label>
                                             <input type="radio" id="female" name="gender" value="Female" <?php echo($row['stu_gender']=='Female')? "Checked" : "" ?>>
                                             <label for="female">Female</label><br><br>
                        <span class="image_text">Student Image:</span>
                            <img class="images" src="<?php echo"../Assets/Student_Images/". $row['stu_img']; ?>" alt="Student Image">
                            <input type="file" class="image_upload_text" name="student_image" accept=".jpg, .jpeg, .png"><br><br><br><br><br><br><br>
              
                        <span class="image_text">Father Image:</span>
                            <img class="images" src="<?php echo"../Assets/Father_Images/". $row['stu_fatherimg']; ?>" alt="Father Image">
                            <input type="file" class="image_upload_text" name="father_image" accept=".jpg, .jpeg, .png"><br><br><br><br><br><br><br>

                        <span class="image_text">Mother Image:</span>
                            <img class="images" src="<?php echo"../Assets/Mother_Images/". $row['stu_motherimg']; ?>" alt="Mother Image">
                            <input type="file" class="image_upload_text" name="mother_image" accept=".jpg, .jpeg, .png"><br><br><br><br><br><br><br>
                           
                        <span class="image_text">Guardian Image:</span>
                            <img class="images" src="<?php echo"../Assets/Guardian_Images/". $row['stu_guardianimg']; ?>" alt="Guardian Image">
                            <input type="file" class="image_upload_text" name="guardian_image" accept=".jpg, .jpeg, .png"><br><br><br><br><br><br><br>
                                            
                         
                </div>
                              
                <div id="Address Details" class="tabcontent">
                    <h2 style="text-align: center;"> Address Details</h2><br>
                    <hr style="width: 80%;height: 3px; background-color: #4352da;"><br><br>
                        
                    <span>Address* :</span><input  type="text" name="address" value="<?php echo $row['stu_padd'];?>"><br><br>
                    <span>City*: </span><input  type="text" name="city_name" value="<?php echo $row['stu_city'];?>"><br><br>
                    <span>State* : </span><input  type="text" name="state_name" value="<?php echo $row['stu_state'];?>"><br><br>
                    <span>PinCode* :</span><input  type="number" name="pincode" value="<?php echo $row['stu_zip'];?>"><br><br>
                    <span>Email ID :  </span><input type="email" name="email_address" value="<?php echo $row['stu_email'];?>"><br><br>
                    <span>Hobbies :  </span> <textarea id="hobbies" name="hobbies"  rows="4" cols="40"  value="<?php echo $row['stu_hobbies']?>"> </textarea><br><br>
                                      
                </div>
              

<div id="Contact Information" class="tabcontent">
<h2 style="text-align: center;">Contact Information</h2><br><br>
                        <span>Mobile Number* : </span><input  type="number" name="mobile" value="<?php echo $row['stu_mobile'];?>"><br><br>
                        <span>Father Mobile* :</span><input  type="number" name="father_mobile" value="<?php echo $row['stu_fmobile'];?>"><br><br>
                        <span>Mother Mobile: </span><input type="number" name="mother_mobile" value="<?php echo $row['stu_mmobile'];?>"><br><br>
                        <h2 style="text-align: center;">Father or Guardian Informtion</h2><br>
                        <span>Father Occupation*: </span><input  type="text" name="father_occupation" value="<?php echo $row['stu_foccupation'];?>"><br><br>
                        <span>Mother Occupation: </span><input type="text" name="mother_occupation" value="<?php echo $row['stu_moccupation'];?>"><br><br>
                        <span>Father Qualification*: </span><input  type="text" name="father_qualification" value="<?php echo $row['stu_fqualification'];?>"><br><br>
                        <span>Guardian Mobile Number : </span><input type="number" name="guardian_mobile" value="<?php echo $row['stu_gmobile'];?>"><br><br>
                        <span>Doctor Detail : </span><input type="text" name="doctor_details" value="<?php echo $row['stu_pdoctor'];?>"><br><br>
                        <span>Doctor Mobile Number : </span><input type="number" name="doc_no" value="<?php echo $row['stu_pdoctorno'];?>"><br><br>
                        
</div>

<div id="General Information" class="tabcontent">
  <h2 style="text-align: center;">General Student Information</h2><br><br>
  <hr style="width: 80%;height: 3px; background-color: #4352da;"><br><br>
                        <span>Admission Number*: </span><input  type="number" name="adm_no" value="<?php echo $row['stu_admno'];?>"><br><br>
                        <span>Feed ID*: </span><input  type="text" name="fee_id" value="<?php echo $row['fee_id'];?>"><br><br>
                        <span>Date of Joining*: </span><input  type="date" name="date_of_joining" value="<?php echo $row['stu_doj'];?>"><br><br>
                        
                        <span>Identification Marks*: </span><input  type="text" name="id_mark"  value="<?php echo $row['stu_idmark'];?>"><br><br>
                         <label for="student_quota">Student Quota:</label>
                                                          <input type="radio" id="management" name="student_quota" value="Management" onclick="hideCounseling()" <?php echo($row['stu_quota']=='Management')? "Checked" : "" ?>>
                                                          <label for="management">Management</label>
                                                          <input type="radio" id="council" name="student_quota" value="Council" onclick="showCounseling()" <?php echo($row['stu_quota']=='Council')? "Checked" : "" ?>>
                                                          <label for="council">Council</label><br><br>
                                                          <div id="counseling" style="display:none;">
                                                            <label for="counseling_no">Counseling No:</label><br>
                                                            <input type="number" id="counseling_no" name="counseling_no" value="<?php echo $row['stu_councellingno'];?>"><br><br>
                                                          </div>

                                                          <script>
                                                            function hideCounseling() {
                                                              document.getElementById("counseling").style.display = "none";
                                                            }
                                                            function showCounseling() {
                                                              document.getElementById("counseling").style.display = "block";
                                                            }
                                                          </script>
                        <!-- <span>Student Quota* : </span><input type="text"  name="student_quota" placeholder="Enter your quota"><br><br> -->
                        <span>Known Language* :  </span><input   type="text" name="known_language" value="<?php echo $row['stu_klang'];?>"><br><br>
                        <span>Nationality : </span><input type="text" name="nationality" value="<?php echo $row['stu_nationality'];?>"><br><br>
                        <span>Religion : </span><input type="radio" id="christian" name="religion" value="Christian" <?php echo($row['stu_religion']=='Christian')? "Checked" : "" ?>>
                                             <label for="christian">Christian</label>
                                             <input type="radio" id="hindu" name="religion" value="Hindu" <?php echo($row['stu_religion']=='Hindu')? "Checked" : "" ?>>
                                             <label for="hindu">Hindu</label>
                                             <input type="radio" id="muslim" name="religion" value="Muslim" <?php echo($row['stu_religion']=='Muslim')? "Checked" : "" ?>>
                                             <label for="muslim">Muslim</label><br><br>
                       
                        <span>Community* : </span><input type="text"  name="community" value="<?php echo $row['stu_community'];?>"><br><br>
                        <span>Cast : </span><input type="text" name="cast" value="<?php echo $row['stu_caste'];?>"><br><br>
                        <span>Orphan:</span><input type='radio' name="orphan" value="Yes" id="orphan_yes" <?php echo($row['stu_orphan']=='Yes')? "Checked" : "" ?>>
                                            <label for="orphan_yes">Yes</label>
                                            <input type="radio" name="orphan" value="No" id="orphan_no" <?php echo($row['stu_orphan']=='No')? "Checked" : "" ?>>
                                            <label for="orphan_no">No</label><br><br>
                       <span>First Graduate:</span><input type='radio' name="first_grad" value="Yes" id="fg_yes" <?php echo($row['stu_fg']=='Yes')? "Checked" : "" ?>>
                                            <label for="fg_yes">Yes</label>
                                            <input type="radio" name="first_grad" value="No" id="fg_no" <?php echo($row['stu_fg']=='No')? "Checked" : "" ?>>
                                            <label for="fg_no">No</label><br><br>
                       <span>Special Category:</span><input type="radio" value="Sports" name="special_category" id="sport" <?php echo($row['stu_splcat']=='Sports')? "Checked" : "" ?>>
                                                     <label for="sport">Sport</label>
                                                     <input type="radio" value="Ex-Service man" name="special_category" id="ex_serviceman" <?php echo($row['stu_splcat']=='Ex-Service man')? "Checked" : "" ?>>
                                                     <label for="ex_serviceman">Ex-service man</label><br><br>
                       <span>Comments : </span> <input type="text" name="comment" value="<?php echo $row['stu_comments'];?>"  placeholder="Comment about the student"/>

</div>
<div id="Health Information" class="tabcontent">
<h2 style="text-align: center;">Health Information</h2><br><br>
  
                            <span>Student Weight* : </span><input  type="number" name="weight" value="<?php echo $row['stu_weight'];?>" ><br><br>
                            <span>Student Height* : </span><input  type="number" name="height" value="<?php echo $row['stu_height'];?>"><br><br>
                            <span for="disability">Disability:</span>
                                          <input type="radio" id="dis_yes" name="disability" value="Yes" onclick="showDisability()" <?php echo($row['stu_disability']=='Yes')? "Checked" : "" ?>>
                                          <label for="dis_yes">Yes</label>
                                          <input type="radio" id="dis_no" name="disability" value="No" onclick="hideDisability()" <?php echo($row['stu_disability']=='No')? "Checked" : "" ?>>
                                          <label for="dis_no">No</label><br><br>
                                          <div id="disabilitySection" style="display:none;">
                                            <span for="disidcard_no">Disability ID Card No:</span>
                                            <input type="number" id="disidcard_no" name="disidcard_no" value="?php echo $row['stu_disid'];?>" ><br><br>
                                            <span for="dis_type">Disability Type:</span>
                                            <input type="text" id="dis_type" name="dis_type" value="<?php echo $row['stu_distype'];?>"><br><br>
                                            <span for="dis_percentage">Disability Percentage:</span>
                                            <input type="text" id="dis_percentage" name="dis_percentage" value="<?php echo $row['stu_disper'];?>"><br><br>
                                          </div>

                                          <script>
                                            function hideDisability() {
                                              document.getElementById("disabilitySection").style.display = "none";
                                            }
                                            function showDisability() {
                                              document.getElementById("disabilitySection").style.display = "block";
                                            }
                                          </script>
                              <span >Pallor:</span>
                                          <input type="radio"  id="pallor_yes" name="pallor" value="Yes" <?php echo($row['stu_pallor']=='Yes')? "Checked" : "" ?> >
                                          <label for="pallor_yes">Yes</label>
                                          <input type="radio" id="pallor_no" name="pallor" value="No"  <?php echo($row['stu_pallor']=='No')? "Checked" : "" ?>>
                                          <label for="pallor_no">No</label><br><br>
                            <span>Squint details* : </span><input  type="text" name="squint" value="<?php echo $row['stu_squint'];?>" placeholder="Enter squint details"><br><br>
                            <span>Blood Pressure* : </span><input  type="number" name="blood_pressure" value="<?php echo $row['stu_bp'];?>" ><br><br>
                            <span>Blood Group* :</span><select   name="blood_group">
                                                <option selected id="A+" value="A+"  <?php echo ($row['stu_bloodgrp']=='A+')? "Checked" : "";?> >A+</option>
                                                <option id="A-" value="A-" <?php echo ($row['stu_bloodgrp']=='A-')? "Checked" : "";?>>A-</option>
                                                <option id="B+" value="B+" <?php echo ($row['stu_bloodgrp']=='B+')? "Checked" : "";?>>B+</option>
                                                <option id="B-" value="B-" <?php echo ($row['stu_bloodgrp']=='B-')? "Checked" : "";?>>B-</option>
                                                <option id="O+" value="O+" <?php echo ($row['stu_bloodgrp']=='O+')? "Checked" : "";?>>O+</option>
                                                <option id="O-" value="O-" <?php echo ($row['stu_bloodgrp']=='O-')? "Checked" : "";?>>O-</option>
                                                <option id="AB+" value="AB+" <?php echo ($row['stu_bloodgrp']=='AB+')? "Checked" : "";?>>AB+</option>
                                                <option id="AB-" value="AB-" <?php echo ($row['stu_bloodgrp']=='AB-')? "Checked" : "";?>>AB-</option>
                                                </select><br><br>
                       
                        <span>Eye Vision Left* :</span><select   name="eye_vision_left">
                                                <option selected id="Very_good" value="very good"<?php echo ($row['stu_visionL']=='very good')? "Checked" : "";?> >Very Good</option>
                                                <option id="good" value="good" <?php echo ($row['stu_visionL']=='good')? "Checked" : "";?>>Good</option>
                                                <option id="bad" value="bad" <?php echo ($row['stu_visionL']=='bad')? "Checked" : "";?>>Bad</option>
                                                </select><br><br>
                        <span>Eye Vision Right* :</span><select   name="eye_vision_right">
                                                <option selected id="Very_good" value="very good" <?php echo ($row['stu_visionR']=='very good')? "Checked" : "";?> >Very Good</option>
                                                <option id="good" value="good" <?php echo ($row['stu_visionR']=='good')? "Checked" : "";?>>Good</option>
                                                <option id="bad" value="bad" <?php echo ($row['stu_visionR']=='bad')? "Checked" : "";?>>Bad</option>
                                                </select><br><br> 
                        <span>Eye Condition* :</span><select   name="eye_condition">
                                                <option selected id="Very_good" value="very good" <?php echo ($row['stu_eyecon']=='very good')? "Checked" : "";?> >Very Good</option>
                                                <option id="good" value="good" <?php echo ($row['stu_eyecon']=='good')? "Checked" : "";?>>Good</option>
                                                <option id="bad" value="bad" <?php echo ($row['stu_eyecon']=='bad')? "Checked" : "";?>>Bad</option>
                                                </select><br><br>
                        <span>Dental Condition :</span><select   name="dental_condition">
                                                <option selected id="Very_good" value="very good" <?php echo ($row['stu_dentalcon']=='very good')? "Checked" : "";?>>Very Good</option>
                                                <option id="good" value="good"  <?php echo ($row['stu_dentalcon']=='good')? "Checked" : "";?> >Good</option>
                                                <option id="bad" value="bad"  <?php echo ($row['stu_dentalcon']=='bad')? "Checked" : "";?> >Bad</option>
                                                </select><br><br> 
                        <span>Health Condition* :</span><select   name="health_condition">
                                                <option selected id="Very_good" value="very good"  <?php echo ($row['stu_healthcon']=='very good')? "Checked" : "";?>  >Very Good</option>
                                                <option id="good" value="good"  <?php echo ($row['stu_healthcon']=='good')? "Checked" : "";?> >Good</option>
                                                <option id="bad" value="bad"  <?php echo ($row['stu_healthcon']=='bad')? "Checked" : "";?> >Bad</option>
                                                </select><br><br>  

                        <span>Pulse*: </span><input  type="number" name="pulse" value="<?php echo $row['stu_pulse'];?>"><br><br>   
                    </div>

                    <div id="Paasport Information" class="tabcontent">
                            <h2 style="text-align: center;">Passport Information</h2><br><br>
                            <span>Aadhaar Number*: </span><input  type="number" name="aadhaar_no" value="<?php echo $row['stu_aadhar'];?>"><br><br>
                            <span>Passport Number:</span><input  type="text" name="pass_no" value="<?php echo $row['stu_ppno'];?>"><br><br>
                            <span>Passport Issue Date:</span><input  type="date" name="pass_issue_date" value="<?php echo $row['stu_issuedate'];?>" placeholder="Enter your passport isssue date"><br><br>
                            <span>Passport Issue at:</span><input  type="text" name="pass_issue_at" value="<?php echo $row['stu_ppissueat'];?>"><br><br>
                            <span>Passport Expiry date:</span><input  type="date" name="pass_expiry_date" <?php echo $row['stu_ppexpdate'];?>><br><br>
                            <span>Visa Number:</span><input  type="text" name="visa_no" value="<?php echo $row['stu_visano'];?>"><br><br>
                            <span>Visa expiry date:</span><input  type="date" name="visa_expiry_date" value="<?php echo $row['stu_visaexpdate'];?>"><br><br>
                            <span>10th Mark:</span><input  type="numer" name="10th_mark" value="<?php echo $row['stu_10thmark'];?>"><br><br>
                            <span>12th Mark:</span><input  type="numer" name="12th_mark" value="<?php echo $row['stu_12thmark'];?>"><br><br>
                            <span>10th Exam Number:</span><input  type="numer" name="10th_exam_no" value="<?php echo $row['stu_10theno'];?>"><br><br>
                            <span>12th Exam Number:</span><input  type="numer" name="12th_exam_no" value="<?php echo $row['stu_12theno'];?>"><br><br>
                            <span>Income Certificate Number:</span><input  type="numer" name="income_no" value="<?php echo $row['stu_inccerno'];?>"><br><br>
                            <span>Annual Income:</span><input  type="numer" name="income" value="<?php echo $row['stu_income'];?>"><br><br>
                            <span>Community Certificate Number:</span><input  type="numer" name="community_no" value="<?php echo $row['stu_comcerno'];?>"><br><br>
                            
                    </div>
                    <div id="Bank Information" class="tabcontent">
                           <span>Student as the Bank  : </span><input type="text"  name="stu_nameasbank" value="<?php echo $row['stu_nameasbank'];?>"><br><br>
                           <span>Bank Name : </span><input type="text"  name="stu_bankname" value="<?php echo $row['stu_bankname'];?>"><br><br>
                           <span>Branch Name : </span><input type="text"  name="stu_brancename" value="<?php echo $row['stu_brancename'];?>"><br><br>
                           <span>Bank Account Number*: </span><input  type="number" name="account_no" value="<?php echo $row['$stu_accno'];?>"> <br><br>
                           <span>Bank IFSC*: </span><input  type="text" name="ifsc" value="<?php echo $row['stu_ifsc'];?>"><br><br>
                           <span>Course Type :</span><input type="radio" name="course_type" value="Regular" id="regular" <?php echo ($row['stu_coursetype']=='Regular')? "Checked" : "";?>>
                                                       <label for="regular">Regular</label>
                                                       <input type="radio" name="course_type" value="Part-Time" id="part_time" <?php echo ($row['stu_coursetype']=='Part-Time')? "Checked" : "";?>>
                                                       <label for="part_time">Part Time</label><br><br>
                           <span>Lateral Entry :</span><input type="radio" name="lateral" value="Yes" id="lateral_yes" <?php echo ($row['stu_lateral']=='Yes')? "Checked" : "";?>>
                                                       <label for="lateral_yes">Yes</label>
                                                       <input type="radio" name="lateral" value="No" id="lateral_no"  <?php echo ($row['stu_lateral']=='No')? "Checked" : "";?>>
                                                       <label for="lateral_no">No</label><br><br>
                         <span>Student Status :</span><input type="radio" name="stu_status" value="Active" id="active"  <?php echo ($row['stu_status']=='Active')? "Checked" : "";?>>
                                                       <label for="active">Active</label>
                                                       <input type="radio" name="stu_status" value="Dropout" id="dropout" <?php echo ($row['stu_status']=='Dropout')? "Checked" : "";?>>
                                                       <label for="dropout">DropOut</label>
                                                       <input type="radio" name="stu_status" value="discontinued" id="discontinued" <?php echo ($row['stu_status']=='Discontinued')? "Checked" : "";?>>
                                                       <label for="discontinued">Discontinued</label><br><br>

                         <input class="submit" name="submit" type="submit" value="Update"> 
                    </div>
                    <!-- <div id="login Information" class="tabcontent">
                           <span for="password">Password:</span>
                            <input type="password" id="password" name="password" placeholder="Enter your password" onchange="validatePassword()">
                            <input type="checkbox" id="showPassword" onchange="togglePasswordVisibility()">
                            <label for="showPassword">Show password</label>
                            <span id="passwordError" style="color: red;"></span><br><br>

                            <span for="confirmPassword">Confirm password:</span>
                            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" onchange="validateConfirmPassword()">
                            <span id="confirmPasswordError" style="color: red;"></span><br><br>

                            <script>
                            function togglePasswordVisibility() {
                              const passwordInput = document.getElementById("password");
                              if (passwordInput.type === "password") {
                                passwordInput.type = "text";
                              } else {
                                passwordInput.type = "password";
                              }
                            }

                            // function toggleConfirmPasswordVisibility() {
                            //   const confirmPasswordInput = document.getElementById("confirmPassword");
                            //   if (confirmPasswordInput.type === "password") {
                            //     confirmPasswordInput.type = "text";
                            //   } else {
                            //     confirmPasswordInput.type = "password";
                            //   }
                            // }

                            function validatePassword() {
                              const passwordInput = document.getElementById("password");
                              const passwordError = document.getElementById("passwordError");
                              const regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;
                              if (!regex.test(passwordInput.value)) {
                                passwordError.innerHTML = "Password must be at least 8 characters long, and include at least one uppercase letter, one lowercase letter, and one number.";
                              } else {
                                passwordError.innerHTML = "";
                              }
                            }

                            function validateConfirmPassword() {
                              const confirmPasswordInput = document.getElementById("confirmPassword");
                              const confirmPasswordError = document.getElementById("confirmPasswordError");
                              const passwordInput = document.getElementById("password");
                              if (confirmPasswordInput.value !== passwordInput.value) {
                                confirmPasswordError.innerHTML = "Passwords do not match.";
                              } else {
                                confirmPasswordError.innerHTML = "";
                              }
                            }
                            </script>
                             <span for="security-question">Security Question:</span>
                            <select id="security-question" name="security-question">
                              <option value="">--Select--</option>
                              <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
                              <option value="What is the name of your first pet?">What is the name of your first pet?</option>
                              <option value="What city were you born in?">What city were you born in?</option>
                            </select><br><br>
                            <span for="security-answer">Security Answer:</span>
                            <input type="text" id="security-answer" name="security-answer"><br><br>

                           

                    </div> -->
                
</form>



<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
                  
</body>

</html>
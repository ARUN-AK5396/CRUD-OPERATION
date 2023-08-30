<?php
     $servername = "";
     $username = "";
     $password = "";
     $dbname = "";
 
     $conn = mysqli_connect($servername,$username,$password,$dbname);
    // $f_id = $_GET['f_id'];

if(isset($_POST['submit'])){
    $f_id = $_POST['f_id'];
    $f_role=$_POST['role'];
    $f_dob = $_POST['date_of_birth'];
    $f_fname = $_POST['first_name'];
    $f_lname = $_POST['last_name'];
    $f_dept = $_POST['dept'];


    $sql = "UPDATE `` SET WHERE  = '$f_id'";
    $query_run = mysqli_query($conn,$sql);

    if($query_run){
        header("location: done.php?msg=User data uptaded successfully");

    }
    else{
        echo "Failed : ".mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Faculty</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
      width: 100%;
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
        @media only screen and (min-device-width : 768px) and (max-device-width : 1624px) {

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


            .tab-content div.active {
                display: block;

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
            

                    
<div class="tab">
<?php
          if(isset($_GET['f_id']))
          {
            $f_id = $_GET['f_id'];
            $faculty = "SELECT * FROM erp_faculty WHERE f_id = '$f_id'";
            $users_run = mysqli_query($conn,$faculty);

            if(mysqli_num_rows($users_run) > 0)
            {
              foreach($users_run as $user)
              {
          ?>
<h2 style="text-align: center;">Faculty Registration Page</h2>
  <button class="tablinks" onclick="openCity(event, 'Profile Page')">Profile Page</button>
  <button class="tablinks" onclick="openCity(event, 'Address Details')">Address Details</button>
  <button class="tablinks" onclick="openCity(event, 'Faculty Information')">Faculty Information</button>
  <button class="tablinks" onclick="openCity(event, 'General Information')">General Information</button>
  <button class="tablinks" onclick="openCity(event, 'Health Information')">Health Information</button>
  <button class="tablinks" onclick="openCity(event, 'Paasport Information')">Passport Information</button>
  <button class="tablinks" onclick="openCity(event, 'login Information')">Login Information</button>
  
</div>
       
<form method="post" action="">

<div id="Profile Page" class="tabcontent">
<h2 style="text-align: center;"> Profile Page</h2><br>
<hr style="width: 80%;height: 3px; background-color: #4352da;"><br>

                          <!-- <span>Batch : </span><span><select name="batch">
                                                <option selected id="2020-2024" value="2020-2024" >2020 - 2024</option>
                                                <option id="2021-2025" value="2021-2025">2021 - 2025</option>
                                                <option id="2022-2026" value="2022-2026">2022 - 2026</option>
                                                <option id="2023-2027" value="2023-2027">2023 - 2027</option>
                                                <option id="2024-2028" value="2024-2028">2024 - 2028</option>
                                                </select><br><br> -->
                        <span>First Name* : </span><input type="text" value="<?=$user['f_fname'];?>"  name="first_name" ><br><br>
                        <span>Last Name : </span><input type="text" name="last_name"  value="<?=$user['f_lname'];?>" ><br><br>
                        <span>Faculty ID* :</span><input type="text"  name="f_id" value="<?=$user['f_id'];?>" ><br><br>
                        <span>Class ID* :</span><input type="text"  name="cls_id"  value="<?=$user['cls_id'];?>" ><br><br>
                        <span>Date of Birth* :</span><input type="date"  name="date_of_birth"  value="<?=$user['f_dob'];?>" ><br><br>
                        <span>Mother Tongue* : </span><input type="text"  name="mother_lang"  value="<?=$user['f_mlang'];?>" ><br><br>
                        <span>Role :</span><select name="role" >
                                                <option selected>Select your role</option>
                                                <option id="hod" value="HOD" <?= ($user['f_role']=='HOD')?"Selected" : ""  ?>>HOD</option>
                                                <option id="advisor" value="Advisor" <?= ($user['f_role']=='Advisor')?"Selected" : ""  ?>>Advisor</option>
                                                </select><br><br>
                        <span>College Transport : </span><input type="radio" id="college_transport" name="transport" value="yes" <?= ($user['f_transport']=='yes')?"Checked" : ""  ?>>
                                             <label for="college_transport">Yes</label>
                                             <input type="radio" id="own" name="transport" value="No" <?= ($user['f_role']=='No')?"Checked" : ""  ?>>
                                             <label for="own">No</label><br><br>
                        <span>Gender : </span><input type="radio" id="male" name="gender" value="Male" <?= ($user['f_gender']=='Male')?"Checked" : ""  ?>>
                                             <label for="male">Male</label>
                                             <input type="radio" id="female" name="gender" value="Female" <?= ($user['f_role']=='Female')?"Checked" : ""  ?>>
                                             <label for="female">Female</label><br><br>
                         <span>marital status: </span><input type="radio" id="yes" name="mar-status" value="yes" <?= ($user['f_mstatus']=='yes')?"Checked" : ""  ?>>
                                                <label for="yes">Yes</label>
                                                <input type="radio" id="no" name="mar-status" value="no" <?= ($user['f_mstatus']=='no')?"Checked" : ""  ?>>
                                                <label for="no">No</label><br><br>
                         <span>Faculty Hostel : </span><input type="radio" id="hostel" name="fac_hostal" value="Yes" <?= ($user['f_hostal']=='Yes')?"Checked" : ""  ?>>
                                             <label for="hostel">Yes</label>
                                             <input type="radio" id="none_hostel" name="fac_hostal" value="No" <?= ($user['f_hostal']=='No')?"Checked" : ""  ?>>
                                             <label for="none_hostel">No</label><br><br>
                        <span>Department :</span><select name="dept">
                                                <option selected>Select your Department</option>
                                                <option id="civil" value="Civil" <?= ($user['f_dept']=='Civil')?"Selected" : "" ?>>Civil</option>
                                                <option id="cse" value="CSE" <?= ($user['f_dept']=='CSE')?"Selected" : "" ?>>CSE</option>
                                                <option id="ece" value="ECE" <?= ($user['f_dept']=='ECE')?"Selected" : "" ?>>ECE</option>
                                                <option id="eee" value="EEE" <?= ($user['f_dept']=='EEE')?"Selected" : "" ?>>EEE</option>
                                                <option id="mech" value="Mech" <?= ($user['f_dept']=='Mech')?"Selected" : "" ?>>Mechanical</option>
                                                </select><br><br>
                                  

</div>

<div id="Address Details" class="tabcontent">
<h2 style="text-align: center;"> Address Details</h2><br>
<hr style="width: 80%;height: 3px; background-color: #4352da;"><br><br>
                        
                        <span>Address* :</span><input  type="text" name="address" value="<?=$user['f_add'];?>"><br><br>
                        <span>City*: </span><input  type="text" name="city_name" value="<?=$user['f_city'];?>"><br><br>
                        <span>State* : </span><input  type="text" name="state_name" value="<?=$user['f_state'];?>"><br><br>
                        <span>PinCode* :</span><input  type="number" name="pincode" value="<?=$user['f_zip'];?>"><br><br>
                        <span>Permanent address:</span><input type="text" name="per_add" value="<?=$user['f_padd'];?>"><br><br>
                        <span>Mobile Number :</span><input type="number" name="mobile_number" value="<?=$user['f_mobile'];?>"/><br><br>
                        <span>Emergency Number :</span><input  type="number" name="emergency_no" value="<?=$user['f_emgno'];?>"><br><br>
                        <span>Email ID :  </span><input type="email" name="email_address"  value="<?=$user['f_email'];?>"><br><br>
                        <span>identification mark:</span><input type="text" name="id_mark" value="<?=$user['f_idmark'];?>"/><br><br>
                        <span>Hobbies :  </span> <textarea id="hobbies" name="hobbies" value="<?=$user['f_hobbies'];?>" rows="4" cols="40"> </textarea><br><br>
                       
                    </div>
</div>

<div id="Faculty Information" class="tabcontent">
      <span>Qualification :</span> <input type="text"value="<?=$user['f_qualification'];?>"  /><br><br> 
      <span>Designation :</span><select name="designation">
                                                <option id="ap/cse" value="AP/CSE"  <?= ($user['f_designation']=='AP/CSE')?"Selected" : "" ?>>AP/CSE</option>
                                                <option id="P/CSE" value="P/CSE"  <?= ($user['f_designation']=='P/CSE')?"Selected" : "" ?>>P/CSE</option>
                                                <option id="ap/civil" value="AP/CIVIL"  <?= ($user['f_designation']=='AP/CIVIL')?"Selected" : "" ?>>AP/Civil</option>
                                                <option id="P/civil" value="P/Civil"  <?= ($user['f_designation']=='P/Civil')?"Selected" : "" ?>>P/Civil</option>
                                                <option id="ap/ece" value="AP/ECE"  <?= ($user['f_designation']=='AP/ECE')?"Selected" : "" ?>>AP/ECE</option>
                                                <option id="P/ECE" value="P/ECE"  <?= ($user['f_designation']=='P/ECE')?"Selected" : "" ?>>P/ECE</option>
                                                <option id="ap/ee" value="AP/EEE"  <?= ($user['f_designation']=='AP/EEE')?"Selected" : "" ?>>AP/EEE</option>
                                                <option id="P/EEE" value="P/EEE"  <?= ($user['f_designation']=='P/EEE')?"Selected" : "" ?>>P/EEE</option>
                                                <option id="ap/mech" value="AP/MECH"  <?= ($user['f_designation']=='AP/MECH')?"Selected" : "" ?>>AP/Mech</option>
                                                <option id="P/Mech" value="P/MECH" <?= ($user['f_designation']=='P/MECH')?"Selected" : "" ?>>P/MECH</option>
                                                </select><br><br>
      <span>Experience :</span><input type="number" name="experience" value="<?=$user['f_exp'];?>"/><br><br>
      <span>Project Guided*: </span><input  type="number" name="project_guided" value="<?=$user['f_projguide'];?>"><br><br>
      <span>known language :</span><input type="text" name="k_lang" value="<?=$user['f_klang'];?>"/><br><br>
      <span>Nationality :</span><input type="text" name="nationality" value="<?=$user['f_nationality'];?>"/><br><br>
      <span>Date of Joining*: </span><input  type="date" name="date_of_joining" value="<?=$user['f_doj'];?>"><br><br>
      <span>Admission Number*: </span><input  type="number" name="adm_no" value="<?=$user['f_admno'];?>"><br><br>
      <span>Bio ID*: </span><input  type="number" name="bio_id" value="<?=$user['f_bioid'];?>"><br><br>
      <span>Club :</span><select name="club">
                          <option selected>Select club & society</option>
                          <option id="science" value="Science club" <?= ($user['f_club']=='Science club')?"Selected" : "" ?>>Science club</option>
                          <option id="sports" value="Sports club"  <?= ($user['f_club']=='Sports club')?"Selected" : "" ?>>Sports Club</option>
                          </select><br><br>
      <span>Religion : </span><input type="radio" id="christian" name="religion" value="Christian" <?=($user['f_religion']=='Christian')? "Checked" : "" ?>>
                          <label for="christian">Christian</label>
                          <input type="radio" id="hindu" name="religion" value="Hindhu" <?=($user['f_religion']=='Hindhu')? "Checked" : "" ?>>
                          <label for="hindu">Hindu</label>
                          <input type="radio" id="muslim" name="religion" value="Muslim" <?=($user['f_religion']=='Muslim')? "Checked" : "" ?>>
                          <label for="muslim">Muslim</label><br><br>
    
    <span>Community* : </span><input type="text"  name="community" value="<?=$user['f_community'];?>"><br><br>
    <span>Cast : </span><input type="text" name="cast" value="<?=$user['f_caste'];?>"><br><br>
</div>

<div id="General Information" class="tabcontent">
  <h2 style="text-align: center;">General Student Information</h2><br><br>
    <span>University speacialization :</span> <input type="text" name="university_speacilization" value="<?=$user['f_univspec'];?>"><br><br>
    <span>Place of Birth : </span> <input type="text" name="place_of_birth" value="<?=$user['f_pob'];?>"><br><br>
    <span>Industry Experience : </span> <input type="number" name="ind_exp" value="<?=$user['f_indexp'];?>"><br><br>
    <span>Year of Completion : </span> <input type="number" name="year_completion" value="<?=$user['f_yoc'];?>"><br><br>
    <span>Teaching Experience : </span> <input type="number" name="tech_exp" value="<?=$user['f_teachexp'];?>"><br><br>
    <span>Childrens : </span> <input type="number" name="no_of_childs" value="<?=$user['f_child'];?>"><br><br>
    <span>Childrens in same college : </span><input type="radio" id="same_college" name="childinsame" value="yes" <?= ($user['f_childinsame']=='yes')?"Checked" : "" ?>>
                          <label for="same_college">Yes</label>
                          <input type="radio" id="none_same_clg" name="childinsame" value="No" <?= ($user['f_childinsame']=='No')?"Checked" : "" ?>>
                          <label for="none_same_clg">No</label><br><br>
    <span>Childrens in Other college : </span><input type="radio" id="other_college" name="childinother" value="Yes" <?= ($user['f_childinother']=='Yes')?"Checked" : "" ?>>
                          <label for="other_college">Yes</label>
                          <input type="radio" id="none_other_clg" name="childinother" value="No" <?= ($user['f_childinother']=='No')?"Checked" : "" ?>>
                          <label for="none_other_clg">No</label><br><br>
    <span>Food offering : </span><input type="radio" id="veg" name="food_offering" value="veg" <?= ($user['f_food']=='veg')?"Checked" : "" ?>>
                          <label for="veg">Veg</label>
                          <input type="radio" id="nonVeg" name="food_offering" value="Non Veg" <?= ($user['f_food']=='Non Veg')?"Checked" : "" ?>>
                          <label for="nonVeg">Non Veg</label><br><br>
          
</div>
<div id="Health Information" class="tabcontent">
<h2 style="text-align: center;">Health Information</h2><br><br>
      <span for="disability">Disability:</span><input type="radio" id="dis_yes" name="dis" value="Yes" onclick="" <?= ($user['f_disability']=='Yes')?"Checked" : "" ?>>
                                        <label for="dis_yes">Yes</label>
                                        <input type="radio" id="dis_no" name="dis" value="No" onclick="" <?= ($user['f_disability']=='No')?"Checked" : "" ?>>
                                        <label for="dis_no">No</label><br><br>
                                
                                          <!-- <script>
                                            function hideDisability() {
                                              document.getElementById("disabilitySection").style.display = "none";
                                            }
                                            function showDisability() {
                                              document.getElementById("disabilitySection").style.display = "block";
                                            }
                                          </script> -->
                                             <!-- <label for="student_quota">Student Quota:</label>
                                                          <input type="radio" id="management" name="student_quota" value="Management" onclick="hideCounseling()">
                                                          <label for="management">Management</label>
                                                          <input type="radio" id="council" name="student_quota" value="Council" onclick="showCounseling()">
                                                          <label for="council">Council</label><br><br>
                                                          <div id="counseling" style="display:none;">
                                                            <label for="counseling_no">Counseling No:</label><br>
                                                            <input type="number" id="counseling_no" name="counseling_no" placeholder="Enter your counseling no"><br><br>
                                                          </div>

                                                          <script>
                                                            function hideCounseling() {
                                                              document.getElementById("counseling").style.display = "none";
                                                            }
                                                            function showCounseling() {
                                                              document.getElementById("counseling").style.display = "block";
                                                            } 
                                                          </script> -->
    
      <span>Blood Group* :</span><select   name="blood_group">
                          <option selected id="A+" value="A+" <?= ($user['f_bloodgrp']=='A+')?"Selected" : "" ?> >A+</option>
                          <option id="A-" value="A-" <?= ($user['f_bloodgrp']=='A-')?"Selected" : "" ?>>A-</option>
                          <option id="B+" value="B+" <?= ($user['f_bloodgrp']=='B+')?"Selected" : "" ?>>B+</option>
                          <option id="B-" value="B-" <?= ($user['f_bloodgrp']=='B-')?"Selected" : "" ?>>B-</option>
                          <option id="O+" value="O+" <?= ($user['f_bloodgrp']=='O+')?"Selected" : "" ?>>O+</option>
                          <option id="O-" value="O-" <?= ($user['f_bloodgrp']=='O-')?"Selected" : "" ?>>O-</option>
                          <option id="AB+" value="AB+" <?= ($user['f_bloodgrp']=='AB+')?"Selected" : "" ?>>AB+</option>
                          <option id="AB-" value="AB-" <?= ($user['f_bloodgrp']=='AB-')?"Selected" : "" ?>>AB-</option><br><br>
                          </select><br><br>
    <span>Personal Doctor Name:</span> <input type="text" name="personal_doc_name" value="<?=$user['f_pdoctor'];?>"/><br><br>
    <span>Personal Doctor Number:</span> <input type="number" name="personal_doc_no" value="<?=$user['f_pdoctorno'];?>" /><br><br>

</div>
<div id="Paasport Information" class="tabcontent">
        <h2 style="text-align: center;">Passport Information</h2><br><br>
        <span>Aadhaar Number*: </span><input  type="number" name="aadhaar_no" value="<?=$user['f_aadhaarno'];?>"><br><br>
        <span>Passport Number:</span><input  type="text" name="pass_no" value="<?=$user['f_ppno'];?>"><br><br>
        <span>Voter ID Number:</span><input  type="text" name="voter_id" value="<?=$user['f_voterid'];?>"><br><br>
        <span>Pan Card Number:</span><input  type="text" name="pan_card_no" value="<?=$user['f_panno'];?>"><br><br>
        
</div>

<div id="login Information" class="tabcontent">
        <span>Allow Login : </span><input type="radio" id="allow" name="allow_login" value="yes" onclick="show2();"  <?= ($user['f_allowlog']=='yes')?"Checked" : "" ?> >
                          <label for="allow">Yes</label>
                          <input type="radio" id="dont_allow" name="allow_login" value="No" onclick="show1();" <?= ($user['f_allowlog']=='No')?"Checked" : "" ?>>
                          <label for="dont_allow">No</label><br><br>

                <div id="div1" class="hide">
                  <span>User Name :</span> <input type="text" name="usr_name"  value="<?=$user['f_uname'];?>" > <br><br>
                  <span for="password">Password:</span>
                  <input type="password" id="password" name="password"  value="<?=$user['f_pwd'];?>" onchange="validatePassword()">
                  <input type="checkbox" id="showPassword" onchange="togglePasswordVisibility()">
                  <label for="showPassword">Show password</label>
                  <span id="passwordError" style="color: red;"></span><br><br>

                  <span for="confirmPassword">Confirm password:</span>
                  <input type="password" id="confirmPassword" name="confirmPassword"  value="<?=$user['f_cpwd'];?>" onchange="validateConfirmPassword()">
                  <span id="confirmPasswordError" style="color: red;"></span><br><br>

               </div>
          <script>
            function show1(){
                document.getElementById('div1').style.display ='none';
              }
              function show2(){
                document.getElementById('div1').style.display = 'block';
              }
          </script>
         
       
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
          <!-- <span for="security-question">Security Question:</span>
        <select id="security-question" name="security-question">
          <option value="">--Select--</option>
          <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
          <option value="What is the name of your first pet?">What is the name of your first pet?</option>
          <option value="What city were you born in?">What city were you born in?</option>
        </select><br><br>
        <span for="security-answer">Security Answer:</span>
        <input type="text" id="security-answer" name="security-answer"><br><br> -->

        <input class="submit" type="submit" value="Update" name="submit"> 

</div>
                
</form>

<?php
                      }
                    }
                    else{
                      ?>
                      <h4> No Record Found
                      <?php
                    }
                  }
                // $sql = "SELECT  FROM `erp_faculty` WHERE f_id = $id LIMIT 1";
                // $result = mysqli_query($conn , $sql);
                // $row = mysqli_fetch_assoc($result);
            ?>



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

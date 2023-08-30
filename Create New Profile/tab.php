<!DOCTYPE html>
<html>
<head>
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
      width: 40%;
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
    .next_btn{
      margin-left: 38%;
      border: none;
      width: 15%;
      height: 35px;
      border-radius: 28px;
      background-color: #4352da;
      color: #fff;
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
<div class="tab">
<h2 style="text-align: center;">Student Registration Page</h2>
  <button class="tablinks" onclick="openCity(event, 'Profile Page')">Profile Page</button>
  <button class="tablinks" onclick="openCity(event, 'Address Details')">Address Details</button>
  <button class="tablinks" onclick="openCity(event, 'Contact Information')">Contact Information</button>
  <button class="tablinks" onclick="openCity(event, 'General Information')">General Information</button>
  <button class="tablinks" onclick="openCity(event, 'hostel Information')">Hostel Information</button>
  <button class="tablinks" onclick="openCity(event, 'Health Information')">Health Information</button>
  <button class="tablinks" onclick="openCity(event, 'Paasport Information')">Passport Information</button>
  <button class="tablinks" onclick="openCity(event, 'Bank Information')">Bank and Other Information</button>
  <button class="tablinks" onclick="openCity(event, 'login Information')">Login Information</button>
  
  
</div>
<form method="post" action="dataUpload.php" enctype="multipart/form-data">

<div id="Profile Page" class="tabcontent">
<h2 style="text-align: center;"> Profile Page</h2><br>
<hr style="width: 80%;height: 3px; background-color: #4352da;"><br>
                          <!-- <span>User Role :</span><select name="user_role">
                                                <option selected>Select</option>
                                               <option id="student" value="student">Student</option>
                                                <option id="Staff" value="Staff">Staff</option>
                                                </select><br><br> -->
                        <span>First Name* : </span><input type="text" required  name="first_name" placeholder="Enter your First Name"><br><br>
                        <span>Last Name : </span><input type="text" required name="last_name" placeholder="Enter your First Name"><br><br>
                        <span>Register Number* :</span><input type="text" required  name="reg_no" placeholder="Enter your Register Number"><br><br>
                        <span>Class ID* :</span><input type="text" required  name="cls_id" placeholder="Enter your class id"><br><br>
                        <span>Date of Birth* :</span><input type="date" required name="date_of_birth" placeholder="Enter your Date Of Birth"><br><br>
                        <span>Father Name* : </span><input type="text" required  name="father_name" placeholder="Enter your Father Name"><br><br>
                        <span>Mother Name* : </span><input type="text" required name="mother_name" placeholder="Enter your Mother Name"><br><br>
                        <span>Guardian Name* : </span><input type="text" required name="guardian_name" placeholder="Enter your Guardian Name"><br><br>
                        <span>Mother Tongue* : </span><input type="text" required  name="mother_lang" placeholder="Enter your Mother tongue"><br><br>
                        <span>Batch : </span><span><select required name="batch">
                                                <option selected id="2020-2024" value="2020-2024" >2020 - 2024</option>
                                                <option id="2021-2025" value="2021-2025">2021 - 2025</option>
                                                <option id="2022-2026" value="2022-2026">2022 - 2026</option>
                                                <option id="2023-2027" value="2023-2027">2023 - 2027</option>
                                                <option id="2024-2028" value="2024-2028">2024 - 2028</option>
                                                </select><br><br>
                        <span>College Transport : </span><input type="radio" required id="college_transport" name="transport" value="Yes">
                                             <label for="college_transport">Yes</label>
                                             <input type="radio" id="own" name="transport" value="No">
                                             <label for="own">No</label><br><br>
                       
                        <span>Gender : </span><input type="radio" required id="male" name="gender" value="Male">
                                             <label for="male">Male</label>
                                             <input type="radio" id="female" name="gender" value="Female">
                                             <label for="female">Female</label><br><br>
                        <span>Student Image :</span><input type="file" required name="student_image"accept=".jpg, .jpeg , .png"><br><br>
                        <span>Father Image :</span><input type="file" required name="father_image" accept=".jpg, .jpeg , .png"><br><br>
                        <span>Mother Image :</span><input type="file" required name="mother_image" accept=".jpg, .jpeg , .png"><br><br>
                        <span>Guardian Image :</span><input type="file" required name="guardian_image" accept=".jpg, .jpeg , .png"><br><br>
                 </div>

                  <div id="Address Details" class="tabcontent">
                        <h2 style="text-align: center;"> Address Details</h2><br>
                        <hr style="width: 80%;height: 3px; background-color: #4352da;"><br><br>
                        
                        <span>Address* :</span><input  type="text"  name="address" placeholder="Enter your address"><br><br>
                        <span>City*: </span><input  type="text"  name="city_name" placeholder="Enter your City"><br><br>
                        <span>State* : </span><input  type="text"  name="state_name" placeholder="Enter your State"><br><br>
                        <span>PinCode* :</span><input  type="number"  name="pincode" placeholder="Enter your pincode"><br><br>
                        <span>Email ID :  </span><input type="email"  name="email_address" placeholder="Enter your Email Address"><br><br>
                        <span>Hobbies :  </span> <textarea id="hobbies"  name="hobbies" placeholder="Enter your hobbies here." rows="4" cols="40"> </textarea><br><br>
                       
                    </div>
                    <!-- </div> -->

                  <div id="Contact Information" class="tabcontent">
                  <h2 style="text-align: center;">Contact Information</h2><br><br>
                        <span>Mobile Number* : </span><input  type="number" name="mobile" placeholder="Enter your mobile number"><br><br>
                        <span>Father Mobile* :</span><input  type="number" name="father_mobile" placeholder="Enter your father mobile number"><br><br>
                        <span>Mother Mobile: </span><input  type="number" name="mother_mobile" placeholder="Enter your mother mobile number"><br><br>
                        <h2 style="text-align: center;">Father or Guardian Informtion</h2><br>
                        <span>Father Occupation*: </span><input  type="text" name="father_occupation" placeholder="Enter your Father Occupation"><br><br>
                        <span>Mother Occupation: </span><input  type="text" name="mother_occupation" placeholder="Enter your Mother Occupation"><br><br>
                        <span>Father Qualification*: </span><input  type="text" name="father_qualification" placeholder="Enter your Father Qualification"><br><br>
                        <span>Guardian Mobile Number : </span><input  type="number" name="guardian_mobile" placeholder="Enter your Guardian Mobile number"><br><br>
                        <span>Doctor Detail : </span><input type="text" name="doctor_details" placeholder="Enter the doctor details"><br><br>
                        <span>Doctor Mobile Number : </span><input type="number" name="doc_no" placeholder="Enter your Doctor Mobile number"><br><br>
                        
</div>

<div id="General Information" class="tabcontent">
  <h2 style="text-align: center;">General Student Information</h2><br><br>
  <hr style="width: 80%;height: 3px; background-color: #4352da;"><br><br>
                        <span>Admission Number*: </span><input  type="number"  name="adm_no" placeholder="Enter your Admission number"><br><br>
                        <span>Feed ID*: </span><input  type="text" name="fee_id"  placeholder="Enter the Fees id"><br><br>
                        <span>Date of Joining*: </span><input  type="date"  name="date_of_joining" placeholder="Enter your date of joining"><br><br>
                        
                        <span>Identification Marks*: </span><input  type="text"  name="id_mark" placeholder="Enter your identification mark"><br><br>
                         <label for="student_quota">Student Quota:</label>
                                                          <input type="radio"  id="management" name="student_quota" value="Management" onclick="hideCounseling()">
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
                                                          </script>
                        <!-- <span>Student Quota* : </span><input type="text"  name="student_quota" placeholder="Enter your quota"><br><br> -->
                        <span>Known Language* :  </span><input   type="text" name="known_language" placeholder="Which language do you know.."><br><br>
                        <span>Nationality : </span><input type="text"  name="nationality" placeholder="Enter your Nationality"><br><br>
                        <span>Religion : </span><input type="radio"  id="christian" name="religion" value="Christian">
                                             <label for="christian">Christian</label>
                                             <input type="radio" id="hindu" name="religion" value="Hindu">
                                             <label for="hindu">Hindu</label>
                                             <input type="radio" id="muslim" name="religion" value="Muslim">
                                             <label for="muslim">Muslim</label><br><br>
                       
                        <span>Community* : </span><input type="text"   name="community" placeholder="Enter your Community"><br><br>
                        <span>Cast : </span><input type="text"  name="cast" placeholder="Enter your cast"><br><br>
                        <span>Orphan:</span><input type='radio'  name="orphan" value="Yes" id="orphan_yes">
                                            <label for="orphan_yes">Yes</label>
                                            <input type="radio" name="orphan" value="No" id="orphan_no">
                                            <label for="orphan_no">No</label><br><br>
                       <span>First Graduate:</span><input type='radio'  name="first_grad" value="Yes" id="fg_yes">
                                            <label for="fg_yes">Yes</label>
                                            <input type="radio" name="first_grad" value="No" id="fg_no">
                                            <label for="fg_no">No</label><br><br>
                       <span>Special Category:</span><input type="radio" value="sports"  name="special_category" id="sport">
                                                     <label for="sport">Sport</label>
                                                     <input type="radio" value="Ex-Service man" name="special_category" id="ex_serviceman">
                                                     <label for="ex_serviceman">Ex-service man</label>  <br><br>
                       <span>Comments : </span> <input type="text" name="comment"  placeholder="Comment about the student"/>

               </div>
                        <div id="hostel Information" class="tabcontent">
                        <span>Hostel: </span><input type="radio" id="yes"  name="hos" value="Yes" onclick="show2();">
                                                <label for="yes">Yes</label>
                                                <input type="radio" id="no" name="hos" value="No" onclick="show1();">
                                                <label for="no">No</label><br><br>
                                     <div id="div1" class="hide">
                                       <span>Hostel ID: </span><input type="number" name="h_id" placeholder="Enter your hostel ID"><br><br>
                                       <span>Room no: </span><input type="number" name="room_no" placeholder="Enter your hostel room no"><br><br>
                                       <span>Hostel Gender : </span> <input type="radio" id="Male" name="hostel_gender" value="Male">
                                             <label for="Male">Male</label>
                                             <input type="radio" id="Female" name="hostel_gender" value="Female">
                                             <label for="Female">Female</label><br><br>
                                       <span>Hostel Type: </span><input type="radio" id="free" name="hostel_type" value="Free">
                                             <label for="free">Free</label>
                                             <input type="radio" id="paid" name="hostel_type" value="Paid">
                                             <label for="paid">Paid</label><br><br>
                                       <span>Hostel Warden Name : </span> <input type="text" name="hostel_warden_name" placeholder="Enter Hostel warden name"  /> <br><br>
                                       <span>Hostel Warden Mobile number : </span> <input type="number" name="hostel_warden_mobile" placeholder="Enter Hostel warden Mobile"  /><br><br>
                                       <span>Hostel depty Warden Name : </span> <input type="text" name="hostel_debty_warden_name" placeholder="Enter Hostel debty warden name"  /><br><br>
                                       <span>Hostel depty Warden mobile Number : </span> <input type="number" name="hostel_depty_warden_mobile" placeholder="Enter Hostel depty warden mobile"  />                           
                                       <span>Hostel Residential Tutor Warden Name : </span> <input type="text" name="hostel_tutor_warden_name" placeholder="Enter Hostel residential tutor warden name"  /><br><br>
                                       <span>Hostel Residentail Tutor Warden mobile Number : </span> <input type="number" name="hostel_residential_warden_mobile" placeholder="Enter Hostel residentaial tutor warden mobile"  />                           
                                    </div>
                              <script>
                                function show1(){
                                    document.getElementById('div1').style.display ='none';
                                  }
                                  function show2(){
                                    document.getElementById('div1').style.display = 'block';
                                  }
                              </script> 

                        </div>
                         <div id="Health Information" class="tabcontent">
                            <h2 style="text-align: center;">Health Information</h2><br><br>
                      
                            <span>Student Weight* : </span><input  type="number" name="weight" placeholder="Enter your weight"><br><br>
                            <span>Student Height* : </span><input  type="number" name="height" placeholder="Enter your height"><br><br>
                            <span for="disability">Disability:</span>
                                          <input type="radio" id="dis_yes" name="disability" value="Yes" onclick="showDisability()">
                                          <label for="dis_yes">Yes</label>
                                          <input type="radio" id="dis_no" name="disability" value="No" onclick="hideDisability()">
                                          <label for="dis_no">No</label><br><br>
                            <div id="disabilitySection" style="display:none;">
                              <span for="disidcard_no">Disability ID Card No:</span>
                              <input type="number" id="disidcard_no" name="disidcard_no" placeholder="Enter your Disability ID Card No"><br><br>
                              <span for="dis_type">Disability Type:</span>
                              <input type="text" id="dis_type" name="dis_type" placeholder="Enter your Disability Type"><br><br>
                              <span for="dis_percentage">Disability Percentage:</span>
                              <input type="text" id="dis_percentage" name="dis_percentage" placeholder="Enter your Disability Percentage"><br><br>
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
                                          <input type="radio"  id="pallor_yes" name="pallor" value="Yes" >
                                          <label for="pallor_yes">Yes</label>
                                          <input type="radio" id="pallor_no" name="pallor" value="No">
                                          <label for="pallor_no">No</label><br><br>
                            <span>Squint details* : </span><input  type="text" name="squint" placeholder="Enter squint details"><br><br>
                            <span>Blood Pressure* : </span><input  type="number" name="blood_pressure" placeholder="Enter your Blood pressure"><br><br>
                            <span>Blood Group* :</span><select   name="blood_group">
                                                <option selected id="A+" value="A+" >A+</option>
                                                <option id="A-" value="A-">A-</option>
                                                <option id="B+" value="B+">B+</option>
                                                <option id="B-" value="B-">B-</option>
                                                <option id="O+" value="O+">O+</option>
                                                <option id="O-" value="O-">O-</option>
                                                <option id="AB+" value="AB+">AB+</option>
                                                <option id="AB-" value="AB-">AB-</option>
                                                </select><br><br>
                       
                        <span>Eye Vision Left* :</span><select   name="eye_vision_left">
                                                <option selected id="Very_good" value="very good" >Very Good</option>
                                                <option id="good" value="good">Good</option>
                                                <option id="bad" value="bad">Bad</option>
                                                </select><br><br>
                        <span>Eye Vision Right* :</span><select   name="eye_vision_right">
                                                <option selected id="Very_good" value="very good" >Very Good</option>
                                                <option id="good" value="good">Good</option>
                                                <option id="bad" value="bad">Bad</option>
                                                </select><br><br> 
                        <span>Eye Condition* :</span><select required  name="eye_condition">
                                                <option selected id="Very_good" value="very good" >Very Good</option>
                                                <option id="good" value="good">Good</option>
                                                <option id="bad" value="bad">Bad</option>
                                                </select><br><br>
                        <span>Dental Condition :</span><select required  name="dental_condition">
                                                <option selected id="Very_good" value="very good" >Very Good</option>
                                                <option id="good" value="good">Good</option>
                                                <option id="bad" value="bad">Bad</option>
                                                </select><br><br> 
                        <span>Health Condition* :</span><select required  name="health_condition">
                                                <option selected id="Very_good" value="very good" >Very Good</option>
                                                <option id="good" value="good">Good</option>
                                                <option id="bad" value="bad">Bad</option>
                                                </select><br><br>  

                        <span>Pulse*: </span><input  type="number"  name="pulse" placeholder="Enter your pulse"><br><br>   
                        
                      </div>
                    <div id="Paasport Information" class="tabcontent">
                            <h2 style="text-align: center;">Passport Information</h2><br><br>
                            <span>Aadhaar Number*: </span><input  type="number" name="aadhaar_no" placeholder="Enter your Aadhar number"><br><br>
                            <span>Passport Number:</span><input  type="text" name="pass_no" placeholder="Enter your passport number"><br><br>
                            <span>Passport Issue Date:</span><input  type="date" name="pass_issue_date" placeholder="Enter your passport isssue date"><br><br>
                            <span>Passport Issue at:</span><input  type="text" name="pass_issue_at" placeholder="Enter your passport issue location"><br><br>
                            <span>Passport Expiry date:</span><input  type="date" name="pass_expiry_date" placeholder="Enter your passport expiry date"><br><br>
                            <span>Visa Number:</span><input  type="text" name="visa_no" placeholder="Enter your visa Number"><br><br>
                            <span>Visa expiry date:</span><input  type="date" name="visa_expiry_date" placeholder="Enter your visa expiry date"><br><br>
                            <span>10th Mark:</span><input  type="numer" name="10th_mark" placeholder="Enter your 10th Examm number"><br><br>
                            <span>12th Mark:</span><input  type="numer" name="12th_mark" placeholder="Enter your 12th Examm number"><br><br>
                            <span>10th Exam Number:</span><input  type="numer" name="10th_exam_no" placeholder="Enter your 10th Examm number"><br><br>
                            <span>12th Exam Number:</span><input  type="numer" name="12th_exam_no" placeholder="Enter your 12th Examm number"><br><br>
                            <span>Income Certificate Number:</span><input  type="numer" name="income_no" placeholder="Enter your Income certificate number"><br><br>
                            <span>Annual Income:</span><input  type="numer" name="income" placeholder="Enter your Annual Income"><br><br>
                            <span>Community Certificate Number:</span><input  type="numer" name="community_no" placeholder="Enter your community certificate number"><br><br>
                            
                    </div>
                    <div id="Bank Information" class="tabcontent">
                           <span>Student as the Bank  : </span><input type="text"  name="stu_nameasbank" placeholder="Enter your Name as the Bank"><br><br>
                           <span>Bank Name : </span><input type="text"   name="stu_bankname" placeholder="Enter your Bank Name"><br><br>
                           <span>Branch Name : </span><input type="text"  name="stu_brancename" placeholder="Enter your branch Name"><br><br>
                           <span>Bank Account Number*: </span><input   type="number" name="account_no" placeholder="Enter your Bank Account number"><br><br>
                           <span>Bank IFSC*: </span><input  type="text" name="ifsc" placeholder="Enter your Bank IFSC "><br><br>
                           <span>Course Type :</span><input type="radio"   name="course_type" value="Regular" id="regular">
                                                       <label for="regular">Regular</label>
                                                       <input type="radio" name="course_type" value="Part-Time" id="part_time">
                                                       <label for="part_time">Part Time</label><br><br>
                           <span>Lateral Entry :</span><input type="radio"  name="lateral" value="Yes" id="lateral_yes">
                                                       <label for="lateral_yes">Yes</label>
                                                       <input type="radio" name="lateral" value="No" id="lateral_no">
                                                       <label for="lateral_no">No</label><br><br>
                         <span>Student Status :</span><input type="radio"  name="stu_status" value="Active" id="active">
                                                       <label for="active">Active</label>
                                                       <input type="radio" name="stu_status" value="Dropout" id="dropout">
                                                       <label for="dropout">DropOut</label>
                                                       <input type="radio" name="stu_status" value="discontinued" id="discontinued">
                                                       <label for="discontinued">Discontinued</label><br><br>
                   
                       </div>
                    <div id="login Information" class="tabcontent">
                           <span for="password">Password:</span>
                            <input type="password"  id="password" name="password" placeholder="Enter your password" onchange="validatePassword()">
                            <input type="checkbox" id="showPassword" onchange="togglePasswordVisibility()">
                            <label for="showPassword">Show password</label>
                            <span id="passwordError" style="color: red;"></span><br><br>

                            <span for="confirmPassword">Confirm password:</span>
                            <input type="password"  id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" onchange="validateConfirmPassword()">
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
                             <!-- <span for="security-question">Security Question:</span>
                            <select id="security-question" name="security-question">
                              <option value="">--Select--</option>
                              <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
                              <option value="What is the name of your first pet?">What is the name of your first pet?</option>
                              <option value="What city were you born in?">What city were you born in?</option>
                            </select><br><br>
                            <span for="security-answer">Security Answer:</span>
                            <input type="text" id="security-answer" name="security-answer"><br><br> -->

                            <input class="submit" type="submit" value="submit"> 

                    </div>
                
</form>


<script>
function validateTabFields(tab) {
  var requiredFields = tab.querySelectorAll("[required]");
  var isValid = true;

  requiredFields.forEach(function(field) {
    if (field.value.trim() === "") {
      isValid = false;
      // You can display an error message or style the field to indicate the error.
      field.classList.add("error");
    }
  });

  return isValid;
}

function nextTab(event) {
  event.preventDefault();
  console.log("Next btn clicked");
  var currentTab = event.currentTarget.parentElement;
  var nextTab = currentTab.nextElementSibling;

  if (validateTabFields(currentTab)) {
    currentTab.style.display = "none";
    nextTab.style.display = "block";
    setActiveTab(nextTab);
  }
}

function setActiveTab(tab) {
  var tablinks = document.getElementsByClassName("tablinks");
  for (var i = 0; i < tablinks.length; i++) {
    tablinks[i].classList.remove("active");
  }
  var tablink = document.querySelector(`.tablinks[onclick="openCity(event, '${tab.id}')"]`);
  tablink.classList.add("active");
}
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

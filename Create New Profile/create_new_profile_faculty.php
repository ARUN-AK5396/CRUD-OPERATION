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
<h2 style="text-align: center;">Faculty Registration Page</h2>
  <button class="tablinks" onclick="openCity(event, 'Profile Page')">Profile Page</button>
  <button class="tablinks" onclick="openCity(event, 'Address Details')">Address Details</button>
  <button class="tablinks" onclick="openCity(event, 'Faculty Information')">Faculty Information</button>
  <button class="tablinks" onclick="openCity(event, 'General Information')">General Information</button>
  <button class="tablinks" onclick="openCity(event, 'Health Information')">Health Information</button>
  <button class="tablinks" onclick="openCity(event, 'Paasport Information')">Passport Information</button>
  <button class="tablinks" onclick="openCity(event, 'login Information')">Login Information</button>
  
</div>
<form method="post" action="faculty_dataUpload.php">

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
                        <span>First Name* : </span><input type="text"  name="first_name" placeholder="Enter your First Name"><br><br>
                        <span>Last Name : </span><input type="text" name="last_name" placeholder="Enter your First Name"><br><br>
                        <span>Faculty ID* :</span><input type="text"  name="f_id" placeholder="Enter your Faculty id"><br><br>
                        <span>Class ID* :</span><input type="text"  name="cls_id" placeholder="Enter your class id"><br><br>
                        <span>Date of Birth* :</span><input type="date"  name="date_of_birth" placeholder="Enter your Date Of Birth"><br><br>
                        <span>Mother Tongue* : </span><input type="text"  name="mother_lang" placeholder="Enter your Mother tongue"><br><br>
                        <span>Role :</span><select name="role">
                                                <option selected>Select your role</option>
                                                <option id="hod" value="HOD">HOD</option>
                                                <option id="advisor" value="Advisor">Advisor</option>
                                                </select><br><br>
                        <span>College Transport : </span><input type="radio" id="college_transport" name="transport" value="Yes">
                                             <label for="college_transport">Yes</label>
                                             <input type="radio" id="own" name="transport" value="No">
                                             <label for="own">No</label><br><br>
                        <span>Gender : </span><input type="radio" id="male" name="gender" value="Male">
                                             <label for="male">Male</label>
                                             <input type="radio" id="female" name="gender" value="Female">
                                             <label for="female">Female</label><br><br>
                         <span>marital status: </span><input type="radio" id="yes" name="mar-status" value="Yes" >
                                                <label for="yes">Yes</label>
                                                <input type="radio" id="no" name="mar-status" value="No" >
                                                <label for="no">No</label><br><br>
                         <span>Faculty Hostel : </span><input type="radio" id="hostel" name="fac_hostel" value="Yes">
                                             <label for="hostel">Yes</label>
                                             <input type="radio" id="none_hostel" name="fac_hostel" value="No">
                                             <label for="none_hostel">No</label><br><br>
                        <span>Department :</span><select name="dept">
                                                <option selected>Select your Department</option>
                                                <option id="civil" value="Civil">Civil</option>
                                                <option id="cse" value="CSE">CSE</option>
                                                <option id="ece" value="ECE">ECE</option>
                                                <option id="eee" value="EEE">EEE</option>
                                                <option id="mech" value="Mech">Mechanical</option>
                                                </select><br><br>
                                  

</div>

<div id="Address Details" class="tabcontent">
<h2 style="text-align: center;"> Address Details</h2><br>
<hr style="width: 80%;height: 3px; background-color: #4352da;"><br><br>
                        
                        <span>Address* :</span><input  type="text" name="address" placeholder="Enter your address"><br><br>
                        <span>City*: </span><input  type="text" name="city_name" placeholder="Enter your City"><br><br>
                        <span>State* : </span><input  type="text" name="state_name" placeholder="Enter your State"><br><br>
                        <span>PinCode* :</span><input  type="number" name="pincode" placeholder="Enter your pincode"><br><br>
                        <span>Permanent address:</span><input type="text" name="per_add" placeholder="Enter your Permanent address"/><br><br>
                        <span>Mobile Number :</span><input type="number" name="mobile_number" placeholder="Enter your contact number"/><br><br>
                        <span>Emergency Number :</span><input  type="number" name="emergency_no" placeholder="Enter the emergeny contact"><br><br>
                        <span>Email ID :  </span><input type="email" name="email_address" placeholder="Enter your Email Address"><br><br>
                        <span>identification mark:</span><input type="text" name="id_mark" placeholder="Enter your Identification mark"/><br><br>
                        <span>Hobbies :  </span> <textarea id="hobbies" name="hobbies" placeholder="Enter your hobbies here." rows="4" cols="40"> </textarea><br><br>
                       
                    </div>
</div>

<div id="Faculty Information" class="tabcontent">
      <span>Qualification : </span> <input type="text" name="qualification" />
      <span>Designation :</span><select name="designation">
                                                <option selected>Select your designation</option>
                                                <option id="ap/cse" value="AP/CSE">AP/CSE</option>
                                                <option id="P/CSE" value="P/CSE">P/CSE</option>
                                                <option id="ap/civil" value="AP/CSE">AP/Civil</option>
                                                <option id="P/civil" value="P/Civil">P/Civil</option>
                                                <option id="ap/ece" value="AP/ECE">AP/ECE</option>
                                                <option id="P/ECE" value="P/ECE">P/ECE</option>
                                                <option id="ap/ee" value="AP/EEE">AP/EEE</option>
                                                <option id="P/EEE" value="P/EEE">P/EEE</option>
                                                <option id="ap/mech" value="AP/Mech">AP/Mech</option>
                                                <option id="P/Mech" value="P/Mech">P/Mech</option>
                                                </select><br><br>
      <span>Experience :</span><input type="number" name="experience" placeholder="Enter your experience"/><br><br>
      <span>Project Guided*: </span><input  type="number" name="project_guided" placeholder="Enter the number of project guided"><br><br>
      <span>known language :</span><input type="text" name="k_lang" placeholder="Enter known languages"/><br><br>
      <span>Nationality :</span><input type="text" name="nationality" placeholder="Enter your nationality"/><br><br>
      <span>Date of Joining*: </span><input  type="date" name="date_of_joining" placeholder="Enter your date of joining"><br><br>
      <span>Admission Number*: </span><input  type="number" name="adm_no" placeholder="Enter your Admission number"><br><br>
      <span>Bio ID*: </span><input  type="number" name="bio_id" placeholder="Enter your Bio ID"><br><br>
      <span>Club :</span><select name="club">
                          <option selected>Select club & society</option>
                          <option id="science" value="Science club">Science club</option>
                          <option id="sports" value="Sports club">Sports Club</option>
                          </select><br><br>
      <span>Religion : </span><input type="radio" id="christian" name="religion" value="Christian">
                          <label for="christian">Christian</label>
                          <input type="radio" id="hindu" name="religion" value="Hindu">
                          <label for="hindu">Hindu</label>
                          <input type="radio" id="muslim" name="religion" value="Muslim">
                          <label for="muslim">Muslim</label><br><br>
    
    <span>Community* : </span><input type="text"  name="community" placeholder="Enter your Community"><br><br>
    <span>Cast : </span><input type="text" name="cast" placeholder="Enter your cast"><br><br>
</div>

<div id="General Information" class="tabcontent">
  <h2 style="text-align: center;">General Student Information</h2><br><br>
    <span>University speacialization :</span> <input type="text" name="university_speacilization" placeholder="Enter your university speacialization"><br><br>
    <span>Place of Birth : </span> <input type="text" name="place_of_birth" placeholder="Enter your place of birth"><br><br>
    <span>Industry Experience : </span> <input type="number" name="ind_exp" placeholder="Enter your industry experience"><br><br>
    <span>Year of Completion : </span> <input type="number" name="year_completion" placeholder="Enter your Year of Completion"><br><br>
    <span>Teaching Experience : </span> <input type="number" name="tech_exp" placeholder="Enter your teaching experience"><br><br>
    <span>Childrens : </span> <input type="number" name="no_of_childs" placeholder="Enter the number of childrens"><br><br>
    <span>Childrens in same college : </span><input type="radio" id="same_college" name="childs_in_same_clg" value="Yes">
                          <label for="same_college">Yes</label>
                          <input type="radio" id="none_same_clg" name="childs_in_same_clg" value="No">
                          <label for="none_same_clg">No</label><br><br>
    <span>Childrens in Other college : </span><input type="radio" id="other_college" name="childs_in_other_clg" value="Yes">
                          <label for="other_college">Yes</label>
                          <input type="radio" id="none_other_clg" name="childs_in_other_clg" value="No">
                          <label for="none_other_clg">No</label><br><br>
    <span>Food offering : </span><input type="radio" id="veg" name="food_offering" value="Veg">
                          <label for="veg">Veg</label>
                          <input type="radio" id="nonVeg" name="food_offering" value="Non Veg">
                          <label for="nonVeg">Non Veg</label><br><br>
          
</div>
<div id="Health Information" class="tabcontent">
<h2 style="text-align: center;">Health Information</h2><br><br>
      <span for="disability">Disability:</span><input type="radio" id="dis_yes" name="disability" value="Yes" onclick="">
                                        <label for="dis_yes">Yes</label>
                                        <input type="radio" id="dis_no" name="disability" value="No" onclick="">
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
                          <option selected id="A+" value="A+" >A+</option>
                          <option id="A-" value="A-">A-</option>
                          <option id="B+" value="B+">B+</option>
                          <option id="B-" value="B-">B-</option>
                          <option id="O+" value="O+">O+</option>
                          <option id="O-" value="O-">O-</option>
                          <option id="AB+" value="AB+">AB+</option>
                          <option id="AB-" value="AB-">AB-</option><br><br>
                          </select><br><br>
    <span>Personal Doctor Name:</span> <input type="text" name="personal_doc_name" placeholder="Enter your personal doctor Name" /><br><br>
    <span>Personal Doctor Number:</span> <input type="number" name="personal_doc_no" placeholder="Enter your personal doctor number" /><br><br>
  

</div>
<div id="Paasport Information" class="tabcontent">
        <h2 style="text-align: center;">Passport Information</h2><br><br>
        <span>Aadhaar Number*: </span><input  type="number" name="aadhaar_no" placeholder="Enter your Aadhar number"><br><br>
        <span>Passport Number:</span><input  type="text" name="pass_no" placeholder="Enter your passport number"><br><br>
        <span>Voter ID Number:</span><input  type="text" name="voter_id" placeholder="Enter your passport number"><br><br>
        <span>Pan Card Number:</span><input  type="text" name="pan_card_no" placeholder="Enter your Pan number"><br><br>
        
</div>

<div id="login Information" class="tabcontent">
        <span>Allow Login : </span><input type="radio" id="allow" name="allow_login" value="Yes" onclick="show2();" >
                          <label for="allow">Yes</label>
                          <input type="radio" id="dont_allow" name="allow_login" value="No" onclick="show1();">
                          <label for="dont_allow">No</label><br><br>

                <div id="div1" class="hide">
                  <span>User Name :</span> <input type="text" name="usr_name" placeholder="Enter your username" > <br><br>
                  <span for="password">Password:</span>
                  <input type="password" id="password" name="password" placeholder="Enter your password" onchange="validatePassword()">
                  <input type="checkbox" id="showPassword" onchange="togglePasswordVisibility()">
                  <label for="showPassword">Show password</label>
                  <span id="passwordError" style="color: red;"></span><br><br>

                  <span for="confirmPassword">Confirm password:</span>
                  <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" onchange="validateConfirmPassword()">
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

        <input class="submit" type="submit" value="submit"> 

</div>
                
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

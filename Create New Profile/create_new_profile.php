<!DOCTYPE html>
<html>
    <head>
        <title>Create new user</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            body {
                grid-template-columns: repeat(auto-fill, minmax(16rem, 1fr));
                grid-gap: 5rem;
                padding: 5rem;
                background-image: linear-gradient(to right, #8360c3, #2ebf91);
            }
            h3{
                text-align: center;
                color: #fff;
            }
            .card-container {
                display: flex;
                flex-wrap: wrap;
                gap:50px;
                justify-content: center;
            }

            .card {
                width: 300px;
                margin: 10px;
                border: 1px solid #000;
                border-radius: 5px;
                overflow: hidden;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                align-items: center;
             }

            .card-image {
                width: 100%;
                height: auto;
                background-color: transparent;
            }

            .card-content {
                padding: 15px;
            }

            .card-title {
                font-size: 20px;
                margin-bottom: 10px;
            }

            .card-description {
                font-size: 14px;
                margin-bottom: 15px;
            }

            .card-button {
                padding: 8px 16px;
                background-color: #007bff;
                color: #fff;
                border: none;
                border-radius: 3px;
                cursor: pointer;
               margin-left: 20%;

            }
            .staff-image{
                margin-top: 20px;
                margin-bottom: 20px;
            }

            @media (max-width: 767px) {
                .card {
                    width: 150px;
                }
            }
                    
        </style>
    </head>

  <body>
     <div class="card-container">
        <div class="card">
        <img src="../Assets/student.png" alt="Student" class="card-image">
        <div class="card-content">
           <h3 class="card-title">Student</h3>
           <p class="card-description">Are you student then register on here</p>
           <button class="card-button" onclick="openStudentPage()">Register as a Student</button>
        </div>
     </div>
     <div class="card">
       <img class="staff-image" src="../Assets/staff.png" alt="Staff" class="card-image">
       <div class="card-content">
          <h3 class="card-title">Faculty</h3>
          <p class="card-description">Are you Faculty then register on here</p>
          <button class="card-button" onclick="openStaffPage()" >Register as a staff</button>
       </div>
     </div>
    </div>

    <script>
        function openStudentPage(){
            window.location.href="./tab.php"
        }
        function openStaffPage(){
            window.location.href="create_new_profile_faculty.php"
        }
    </script>

  </body>
</html>


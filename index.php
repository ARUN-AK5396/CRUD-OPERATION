<!DOCTYPE html>
<html>
    <head>
     <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            body{
                background-color: #cfd1d4 ;
            }
            .main_container{
                margin-top: 10%;
                margin-left: 28%;
                height: 300px;
                width: 750px;
                border-radius: 27px;
                background-color: #fff;
                box-shadow: 27px 27px 57px grey;
            }
            input{
                width: 40%;
                padding: 8px;
                padding-left: 20px;
                padding-right: 10px;
                margin-top: 17%;
                margin-left: 8%;
                border-radius: 7px;
            }
            button {
            background-color: #4352da;
            border: none;
            color: white;
            border-radius: 8px;
            margin-top: 110px;
            padding: 10px 25px;
            text-decoration: none;
            cursor: pointer;
        }

        .btn-success{
            padding: 10px 25px;
        }
        .btn-success > a{
            overflow: hidden;
            text-decoration: none;
        }
        @media only screen and (max-width: 900px) {
            .main_container{
                margin-top: 18%;
                margin-left: 10%;
                height: 300px;
                width: 550px;
                border-radius: 27px;
                background-color: #fff;
                box-shadow: 27px 27px 57px grey;
            }
       }
    
        
        </style>
    </head>
    <body>
        <div class="main_container">
            <div class="search_phase">
                <form method="GET" action="./Search User/search_user.php">
                    <input type="text" name="search" placeholder="Search Register number or Name " >
                    <button type="submit">Search</button>
                    <a href="./Create New Profile/create_new_profile.php" class="btn btn-success">Create New User</a>
                </form>
               
              
            </div>
           
        </div>
    </body>
</html>
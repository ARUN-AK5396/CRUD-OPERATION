<?php

    $host = '';
    $username = '';
    $password = '';
    $dbname = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        // retrieve and sanitize the search query
        $search = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING);
        
        // prepare the SQL query
        $stmt = $pdo->prepare("SELECT * FROM  WHERE  LIKE :search");
        $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // $stmt = $pdo->prepare("SELECT * FROM erp_student WHERE stu_fname LIKE :search");
        // $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
        // $stmt->execute();
        // $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

       
    
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    
    
?>
<!Doctype HTML>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- <script>
                       $(document).ready(function () {
                        $('.delete').click(function () {
                            var el = this;
                            //delete user
                            var deleteid = $(this).data('stu_id');
                            //confirmation msg
                            bootbox.confirm("Are you want to be surely delete the user!!" ,function (result){
                                if(result){
                                    $.ajax({
                                        url:'ajaxfile.php',
                                        type: "POST",
                                        data: {id: deleteid} ,
                                        success: function (response){
                                            if (response == 1){
                                                $(el).closest('tr').css('background','tomato');
                                                $(el).closest('tr').fadeOut(800,function (){
                                                    $(this).remove();
                                                });
                                            }
                                        }

                                    });
                                }
                            });
                        });
                       });
                   </script> -->
  <style>
        table, td, th {
          border: 1px solid black;
          text-align: center;
          margin-left: 20px;
          margin-right: 20px;
        }

        table {
          border-collapse: collapse;
          text-align: center;
          width: 100%;
          margin-left: 20px;
          margin-right: 20px;
        }

        td {
          text-align: center;
          padding: 18px;
          width: max-content;
        }
        .search_container{
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            transition: top 0.3s;
            z-index: 1000;
            background-color: white;
            padding: 10px;
        }
        .main_container{
            padding-top: 70px;
        }
        .search{
                width: 40%;
                padding: 8px;
                padding-left: 20px;
                padding-right: 10px;
                margin-left: 8%;
                margin-top: 30px;
                border-radius: 7px;
            }
            button {
            background-color: #4352da;
            border: none;
            color: white;
            border-radius: 8px;
            margin-top: 30px;
            padding: 10px 25px;
            text-decoration: none;
            cursor: pointer;
        }
        .image{
            width: 120px;
            height: 120px;
            padding: 5px;
            border-radius: 50%;
        }
       
    </style>
</head>

<body>
        <div class="search_container">
            <form method="GET" action="">
                <input class="search" type="text" name="search" placeholder="Search Register number or Name " >
                <button type="submit">Search</button>
                <a style=" margin-left: 40px;" class="btn btn-primary" href="./searchFaculty.php" class=""> Search Faculty Information</a>
            </form>
        </div>

        <script>
            let prevScrollPos = window.pageYOffset;
            const searchContainer = document.querySelector('.search_container');

            window.onscroll = function() {
                const currentScrollPos = window.pageYOffset;

                if (prevScrollPos > currentScrollPos) {
                searchContainer.style.top = '0';
                } else {
                searchContainer.style.top = '-70px'; // Adjust this value as needed
                }

                prevScrollPos = currentScrollPos;
               };
        </script>

    <div class="main_container">
        
           
        <?php include('./alert.php');?>
        <div class="user_list">
            <table>
                <tr>
                    <th>Reg No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Student img</th>
                    <th>Confirm Student Name</th>
                    <th>Edit User</th>
                    <th>Confirm Delete</th>
                </tr>
                
                <?php foreach ($users as $user){
                 ?>
                <tr>
                    <td><?= $user['stu_id']?></td>
                    <td><?= $user['stu_fname']?></td>
                    <td><?= $user['stu_lname']?></td>
                    <td> <img class="image" src="<?php echo "../Assets/Student_Images/".$user['stu_img']; ?>" alt="Student Image"></td>
                    <td><?= $user['stu_fname']?></td>
                    <td> <a href="../Edit User/edit_user.php?stu_id=<?= $user['stu_id']?>" class="btn btn-primary">Edit User</a></td>

                    <td>
                        <input type="hidden" class="delete_id_value" value="<?= $user['stu_id']?>">
                        <a href="javascript:void(0)" class="delete_btn_ajax btn btn-danger" >Confirm Delete</a>
                    </td>
                    <script>
                        $(document).ready(function () {
                            $('.delete_btn_ajax').click(function (e) {
                                e.preventDefault();

                                var deleteid = $(this).closest("tr").find('.delete_id_value').val();
                                // console.log(deleteid);
                                swal({
                                title: "Are you sure?",
                                text: "Once deleted, you will not be able to recover this user data!",
                                icon: "warning",
                                buttons: true,
                                dangerMode: true,
                                })
                                .then((willDelete) => {
                                if (willDelete) {

                                    $.ajax({
                                        type:"POST",
                                        url:"delete_user.php",
                                        data:{
                                            "delete_btn_set":1,
                                            "delete_id":deleteid,
                                        },
                                        success: function (response){
                                        
                                        swal("The user details are has been deleted!", {
                                           icon: "success",
                                          }).then((result) => {
                                            location.reload();
                                          });
                                        }
                                    });
                                  
                                } else {
                                    swal("The process are cancelled!");
                                }
                                });
                            });
                         });
                    </script>

                    
                </tr>
                <?php }
                 ?><br> <br>
                
            </table>

           
        </div><br><br>

        
       <a style="margin-top: 20px; margin-left: 40px;" class="btn btn-primary" href="../index.php" class=""> Go home</a>

    </div>
</body>

<!-- echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th></tr>";
        foreach ($users as $user) {
            echo "<tr>";
            echo "<td>" . $user['stu_id'] . "</td>";
            echo "<td>" . $user['stu_fname'] . "</td>";
            echo "<td>" . $user['stu_email'] . "</td>";
            echo "<td>" . $user['stu_mobile'] . "</td>";
            echo "</tr>";
        }
        echo "</table>"; -->
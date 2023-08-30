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
        

        // $stmt = $pdo->prepare("SELECT * FROM `erp_faculty` WHERE f_id LIKE :search");
        // $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
        // $stmt->execute();
        // $faculty = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt = $pdo->prepare("SELECT * FROM `` WHERE LIKE :search");
        $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
        $stmt->execute();
        $faculty = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    ?>
    <!Doctype HTML>
    <head>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"> </script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                        <!-- <script>
                           $(document).ready(function () {
                            $('.delete').click(function () {
                                var el = this;
                                //delete user
                                var deleteid = $(this).data('f_id');
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
            input{
                width: 40%;
                padding: 8px;
                padding-left: 20px;
                padding-right: 10px;
                margin-left: 8%;
                margin-top: 20px;
                border-radius: 7px;
            }
            button {
            background-color: #4352da;
            border: none;
            color: white;
            border-radius: 8px;
            margin-top: 20px;
            padding: 10px 25px;
            text-decoration: none;
            cursor: pointer;
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
            
           
        </style>
    </head>
     <body>
              <form method="GET" action="">
                    <input type="text" name="search" placeholder="Search faculty Name " >
                    <button type="submit">Search</button>
                </form>
     <div class="user_list">
            <table>
                <tr>
                    <th>Faculty ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Department</th>
                    <th>Edit User</th>
                    <th>Confirm Delete</th>
                </tr>
                
                <?php foreach ($faculty as $user){
                 ?>
                <tr>
                
                    <td><?= $user['f_id']?></td>
                    <td><?= $user['f_fname']?></td>
                    <td><?= $user['f_lname']?></td>
                    <td><?= $user['f_dept']?></td>
                    <td> <a href="../Edit User/edit_faculty.php?f_id=<?= $user['f_id']?>" class="btn btn-primary">Edit User</a></td>
                    <td>
                        <input type="hidden" class="delete_id_value" value="<?= $user['f_id']?>">
                        <a href="javascript:void(0)" class="delete_btn_ajax btn btn-danger" > Delete</a>
                    </td>
                    <script>
                        $(document).ready(function () {
                            $('.delete_btn_ajax').click(function (e) {
                                e.preventDefault();

                                var deleteid = $(this).closest("tr").find('.delete_id_value').val();
                                console.log(deleteid);
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
                                        url:"delete_faculty.php",
                                        data:{
                                            "delete_btn_faculty":1,
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
                
            </table><br><br>

       <a style="margin-top: 20px; margin-left: 40px;" class="btn btn-primary" href="../index.php" class=""> Go home</a>
           
        </div>
     </body>
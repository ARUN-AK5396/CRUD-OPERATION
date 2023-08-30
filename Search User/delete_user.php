<?php
$host = '';
$username = '';
$password = '';
$dbname = '';

$con = mysqli_connect($host, $username, $password, $dbname);

if(isset($_POST['delete_btn_set'])){
    $del_id = $_POST['delete_id'];
    
    // Sanitize and escape the input
    $escaped_del_id = mysqli_real_escape_string($con, $del_id);
    
    $reg_query = "DELETE FROM `` WHERE '' = '$escaped_del_id'";
    $reg_query_run = mysqli_query($con, $reg_query);
    
    if ($reg_query_run) {
        echo "success"; // This message will be sent back to the AJAX request.
    } else {
        echo "error"; // Handle the error case appropriately.
    }
}
?>

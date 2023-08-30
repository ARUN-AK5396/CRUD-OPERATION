<?php
    if(isset($_SESSION['message']))
    {
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role='alert'>
            <strong>Hey!</strong><?=$_SESSION['message'];?>
            <button type="button" class="bn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <?php
        unset($_SESSION["message"]);
    }
?>

<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
</html>
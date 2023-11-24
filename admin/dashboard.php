<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/be64b1f6f2.js" crossorigin="anonymous"></script>

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../assets/css/admin.css">

    <title>Admin Section - Dashboard</title>
</head>

<body>

    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!-- admin header here -->

    <!--Admin page wrapper -->
    <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>


        <!-- Admin content -->
        <div class="admin-content">


            <div class="content">

                <h2 class="page-title">Dashboard</h2>

                <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>

                
            </div>

        </div>
        <!-- // Admin content -->

    </div>
    <!-- // page wrapper -->


    <!-- jQuerry -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- ckeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <!-- custom script -->
    <script src="../assets/js/scripts.js"></script>
</body>

</html>
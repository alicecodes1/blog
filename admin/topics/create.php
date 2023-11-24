<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php"); 
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
    <link rel="stylesheet" href="../../assets/css/style.css">
    
    <!-- Admin Styling -->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    
    <title>Admin Section - Add Topic</title>
</head>

<body>

<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
    
<!-- admin header here -->

    <!--Admin page wrapper -->
    <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

         
        <!-- Admin content -->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Topic</a>
                <a href="index.php" class="btn btn-big">Manage Topics</a>
            </div>

          
            <div class="content">

               <h2 class="page-title">Add Topic</h2>
               <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
               
               <form action="create.php" method="post">
                <div>
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo $name ?>" class="text-input">
                </div>
                <div>
                    <label>Description</label>
                    <textarea name="description" id="body"><?php echo $description ?></textarea>
                </div>
                   
                <div>
                    <button type="submit" name="add-topic" class="btn btn-big">Add Topic</button>
                </div>
               </form>

            </div>

        </div>
        <!-- // Admin content -->
    
    </div>
    <!-- // page wrapper -->


    <!-- jQuerry -->
    <script 
       src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- ckeditor -->
    <script
        src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <!-- custom script -->
    <script src="../../assets/js/scripts.js"></script>
</body>

</html>
<?php include("../../path.php"); ?>
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
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <title>Admin Section - Manage Posts</title>
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
                <a href="create.php" class="btn btn-big">Add Post</a>
                <a href="index.php" class="btn btn-big">Manage Post</a>
            </div>


            <div class="content">

                <h2 class="page-title">Manage Posts</h2>

                <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

                <table>
                    <thead>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $key => $post) : ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $post['title'] ?></td>
                                <td>Seriki</td>
                                <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">edit</a></td>
                                <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">delete</a></td>

                                <?php if ($post['published']) : ?>
                                    <td><a href="edit.php?published=0&p_id=<?php echo $post['id'] ?>" class="unpublish">unpublish</a></td>
                                <?php else : ?>
                                    <td><a href="edit.php?published=1&p_id=<?php echo $post['id'] ?>" class="publish">publish</a></td>
                                <?php endif; ?>

                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>

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
    <script src="../../assets/js/scripts.js"></script>
</body>

</html>
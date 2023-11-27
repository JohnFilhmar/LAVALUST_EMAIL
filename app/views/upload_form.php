<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Form</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <div class="text-center">
        <?php if(isset($errors)): ?>
            <?php foreach($errors as $error): ?>
                <?= $error ?>
            <?php endforeach; ?>
        <?php endif; ?>
        <h1 class="display-4">Send to Email</h1>
        <p class="lead">Try sending a file to your email.</p>
        <form action="<?php echo site_url('/do_upload');?>" method="post" enctype="multipart/form-data">
            <input type="text" name="name" class="form-control mb-3" placeholder="Enter the Email's Title or your name. . ."/>
            <input type="email" name="email" class="form-control mb-3" placeholder="Enter recepient's Email. . ."/>
            <input type="text" name="subject" class="form-control mb-3" placeholder="Enter email's Subject. . ."/>
            <input type="textarea" name="content" class="form-control mb-3" placeholder="Enter email's Content. . ."/>
            <input type="file" name="userfile" class="form-control mb-3" accept="image/png, image/gif, image/jpeg" />
            <input type="submit" value="Upload" class="btn btn-primary" />
        </form><br>
        <a href="/logout" class="btn btn-danger">Logout</a>
    </div>
    <!-- Bootstrap JS and Popper.js links (required for Bootstrap components) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>

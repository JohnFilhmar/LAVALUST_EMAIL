<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Success</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <div class="text-center">
        <h1 class="display-4 text-success">Your file was successfully sent to the email.</h1>
        <?php echo $filename;?>
        <a href="/upload" class="btn btn-primary">Upload another file?</a>
        <a href="/logout" class="btn btn-danger">Logout</a>
    </div>
    <!-- <p><?php echo $filename; ?></p> -->

    <!-- Bootstrap JS and Popper.js links (required for Bootstrap components) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>

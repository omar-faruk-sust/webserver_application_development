<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File uploader</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>File uploader</h4>
                </div>
                <div class="card-body">
                    <form action="process_uploaded_file.php" method="POST" enctype="multipart/form-data">
                        <div>
                            <label for="formFileLg" class="form-label">Large file input example</label>
                            <input class="form-control form-control-lg" id="formFileLg" type="file" name="my_file">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Primary</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
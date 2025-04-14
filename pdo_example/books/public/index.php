<?php

require_once '../../config/db_config.php';
require_once '../../config/DBConnection.php';
require_once '../models/Book.php';
require_once '../../config/session_check.php';

$book = new Book(
    DBConnection::connect($host, $user, $dbName, $password)
);
$books = $book->getAll();

?>

<?php 
    include("../../template/header.php");
?>

<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4">Books</h2>
    <!--<a href="create.php" class="btn btn-success mb-3">Add New Book</a> -->
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#bookModal">
        Add Book
    </button>
    <div class="row mt-5">
        <div class="col-md-5 mx-auto">
            <div class="input-group">
                <input name="bookSearch" class="form-control border" type="text" placeholder="Search books by name or isbn" id="searchBooks">
            </div>
        </div>
    </div>
    <br>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th><th>Name</th><th>ISBN</th><th>Actions</th>
            </tr>
        </thead>
        <tbody id="bookData">
            <?php foreach($books as $mBook): ?>
            <tr>
                <td><?= $mBook['book_id']; ?></td>
                <td><?= $mBook['name']; ?></td>
                <td><?= $mBook['isbn']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $mBook['book_id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="delete.php?id=<?= $mBook['book_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="bookModal" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="ajaxBookForm">
        <div class="modal-header">
          <h5 class="modal-title" id="bookModalLabel">Add New Book</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div id="formResponse" class="mb-2"></div>
          <div class="mb-3">
            <label class="form-label">Book Name</label>
            <input type="text" class="form-control" name="name" required>
          </div>
          <div class="mb-3">
            <label class="form-label">ISBN</label>
            <input type="text" class="form-control" name="isbn" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Save Book</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        // Ajax call to search with keyup event
        $('#searchBooks').on('keyup', function() {
            let searchText = $(this).val();
            let requestData = {
                "searchText": searchText
            };

            $.get("search.php", requestData, function(response) {
                $("#bookData").html(response);
            });
        });

        // Ajax call to create book
        $('#ajaxBookForm').submit(function(e){
            e.preventDefault();
            const form = $(this);
            const formData = form.serialize();
            $.post("ajax_create_book.php", formData, function(response) {
                if (response.success) {
                    const book = response.book;
                const row = `
                    <tr>
                        <td>${book.book_id}</td>
                        <td>${book.name}</td>
                        <td>${book.isbn}</td>
                        <td>
                            <a href="edit.php?id=${book.book_id}" class="btn btn-primary btn-sm">Edit</a> |
                            <a href="delete.php?id=${book.book_id}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                `;
                $('#bookData').prepend(row);
                $('#formResponse').html('');
                $('#bookModal').modal('hide');
                form[0].reset();

                } else {
                    $('#formResponse').html('<div class="alert alert-danger">' + response.message + '</div>'); 
                }
            });
        });
        

    });
</script>
</body>
</html>
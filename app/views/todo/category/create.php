<?php

$title = 'Create category';
ob_start();

?>

<div class="row justify-content-center mt-5">
    <div class="col-lg-6 col-md-8 col-sm-10">
        <h1 class="text-center mb-4">Create category</h1>
        <form method="POST" action="/todo/category/store">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" id="description" name="description" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>

<?php

$content = ob_get_clean();
include 'app/views/layout.php';

?>
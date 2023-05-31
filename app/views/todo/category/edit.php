<?php

$title = 'Edit category';
ob_start();

?>

<div class="row justify-content-center mt-5">
    <div class="col-lg-6 col-md-8 col-sm-10">
        <h1 class="text-center mb-4">Edit category</h1>
        <form method="POST" action="/todo/category/update/<?= $category['id'];?>">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="<?= $category['title'];?>" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" id="description" name="description" class="form-control" value="<?= $category['description'];?>" required>
            </div>
            <div class="mb-3">
                <label for="category_usability" class="form-label">Usability</label>
                <input type="checkbox" class="form-check-input" id="category_usability" name="usability" value="1" <?php echo $category['usability'] ? ' checked' : '';?>>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<?php

$content = ob_get_clean();
include 'app/views/layout.php';

?>
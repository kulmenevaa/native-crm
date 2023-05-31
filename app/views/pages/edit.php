<?php

$title = 'Edit page';
ob_start();

?>

<div class="row justify-content-center mt-5">
    <div class="col-lg-6 col-md-8 col-sm-10">
        <h1 class="text-center mb-4">Edit page</h1>
        <form method="POST" action="/pages/update/<?= $page['id'];?>">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="<?= $page['title'];?>" required>
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" id="slug" name="slug" class="form-control" value="<?= $page['slug'];?>" required>
            </div>
            <div id="roles-container" class="mb-3">
                <label for="role" class="form-label">Roles</label>
                <?php $page_roles = explode(',', $page['role']);?>
                <?php foreach($roles as $role):?>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="roles[]" value="<?= $role['id'];?>" <?= in_array($role['id'], $page_roles) ? 'checked' : ''?>>
                        <label for="roles" class="form-check-label"><?= $role['role_name'];?></label>
                    </div>
                <?php endforeach;?>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<?php

$content = ob_get_clean();
include 'app/views/layout.php';

?>
<?php

$title = 'Create role';
ob_start();

?>

<div class="row justify-content-center mt-5">
    <div class="col-lg-6 col-md-8 col-sm-10">
        <h1 class="text-center mb-4">Create role</h1>
        <form method="POST" action="/roles/store">
            <div class="mb-3">
                <label for="role_name" class="form-label">Role_ame</label>
                <input type="text" id="role_name" name="role_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="role_description" class="form-label">Role description</label>
                <input type="text" id="role_description" name="role_description" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>

<?php

$content = ob_get_clean();
include 'app/views/layout.php';

?>
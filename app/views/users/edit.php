<?php

$title = 'Edit user';
ob_start();

?>

<h1>Edit user</h1>
<form method="POST" action="/users/update/<?= $user['id'];?>">
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" id="username" name="username" class="form-control" value="<?= $user['username'];?>" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" id="email" name="email" class="form-control" value="<?= $user['email'];?>" required>
    </div>
    <div class="mb-3">
        <label for="role" class="form-label">Role</label>
        <select id="role" name="role" class="form-control">
            <?php foreach($roles as $role):?>
                <option value="<?= $role['id'];?>" <?= $user['role'] == $role['id'] ? 'selected' : '';?>><?= $role['role_name'];?></option>
            <?php endforeach;?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?php

$content = ob_get_clean();
include 'app/views/layout.php';

?>
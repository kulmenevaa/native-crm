<?php

$title = 'Create user';
ob_start();

?>

<h1>Create user</h1>
<form method="POST" action="/users/store">
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" id="username" name="username" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" id="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" id="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="confirm_password" class="form-label">Confirm Password</label>
        <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>

<?php

$content = ob_get_clean();
include 'app/views/layout.php';

?>
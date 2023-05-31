<?php

$title = 'Authorization';
ob_start();

?>

<div class="row justify-content-center mt-5">
    <div class="col-lg-6 col-md-8 col-sm-10">
        <h1 class="text-center mb-4">Authorization</h1>
        <form method="POST" action="/auth/authenticate">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <div class="mt-3 text-center">
            <p>Don't have an account? <a href="/?page=register">Register here</a></p>
        </div>
    </div>
</div>

<?php

$content = ob_get_clean();
include 'app/views/layout.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title;?></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="sidebar col-md-3">
                    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="min-height: 900px;">
                        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                            <span class="fs-4">Mini CRM</span>
                        </a>
                        <hr>  
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li>
                                <a href="/users" class="nav-link text-white <?= is_active('/users');?>">
                                    Users
                                </a>
                            </li>
                            <li>
                                <a href="/roles" class="nav-link text-white <?= is_active('/roles');?>">
                                    Roles
                                </a>
                            </li>
                            <li>
                                <a href="/pages" class="nav-link text-white <?= is_active('/pages');?>">
                                    Pages
                                </a>
                            </li>
                           <hr>
                           <h4>To do list</h4>
                           <li>
                                <a href="/todo/category" class="nav-link text-white <?= is_active('/todo/category');?>">
                                    Category
                                </a>
                            </li>
                        </ul>
                        <hr>
                        <div class="dropdown">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="" alt="" width="32" height="32" class="rounded-circle me-2">
                                <strong>mdo</strong>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/auth/logout">Sign out</a></li>
                                <li><a class="dropdown-item" href="/auth/login">Sign in</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="article col-md-9">
                    <div class="container mt-4">
                        <?php echo $content; ?>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
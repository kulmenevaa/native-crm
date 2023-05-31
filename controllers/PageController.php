<?php

namespace controllers;

use models\Page;
use models\Role;
use models\Check;

class PageController 
{
    private $check;

    public function __construct()
    {
        $userRole = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : null;
        $this->check = new Check($userRole);
    }

    public function index()
    {
        $this->check->requirePermission();

        $pageModel = new Page();
        $pages = $pageModel->getAllPages();

        include 'app/views/pages/index.php';
    }

    public function create()
    {
        //$this->check->requirePermission();

        $roleModel = new Role();
        $roles = $roleModel->getAllRoles();

        include 'app/views/pages/create.php';
    }

    public function store()
    {
        //$this->check->requirePermission();

        if(isset($_POST['title']) && isset($_POST['slug']) && isset($_POST['roles'])) {
            $title = trim($_POST['title']);
            $slug = trim($_POST['slug']);
            $roles = implode(',', $_POST['roles']);

            if(empty($title) || empty($slug) || empty($roles)) {
                echo 'Title or Slug or Roles fields are required';
                return;
            }

            $pageModel = new Page();
            $pageModel->createPage($title, $slug, $roles);
        }
        header('Location: /pages');
    }

    public function edit($params)
    {
        //$this->check->requirePermission();

        $roleModel = new Role();
        $roles = $roleModel->getAllRoles();

        $pageModel = new Page();
        $page = $pageModel->getPageById($params['id']);

        if(!$page) {
            echo 'Page not found';
            return;
        }

        include 'app/views/pages/edit.php';
    }

    public function update($params)
    {
        //$this->check->requirePermission();

        if(isset($params['id']) && isset($_POST['title']) && isset($_POST['slug']) && isset($_POST['roles'])) {
            $id = trim($params['id']);
            $title = trim($_POST['title']);
            $slug = trim($_POST['slug']);
            $roles = implode(',', $_POST['roles']);

            if(empty($title) || empty($slug) || empty($roles)) {
                echo 'Title or Slug or Roles fields are required';
                return;
            }

            $pageModel = new Page();
            $pageModel->updatePage($id, $title, $slug, $roles);
        }
        header('Location: /pages');
    }

    public function delete($params)
    {
        //$this->check->requirePermission();
        
        $pageModel = new Page();
        $pageModel->deletePage($params['id']);

        header('Location: /pages');
    }
}
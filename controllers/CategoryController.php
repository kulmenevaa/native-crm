<?php

namespace controllers;

use models\Category;
use models\Check;

class CategoryController
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

        $categoryModel = new Category();
        $categories = $categoryModel->getAllCategories();

        include 'app/views/todo/category/index.php';
    }

    public function create()
    {
        $this->check->requirePermission();

        include 'app/views/todo/category/create.php';
    }

    public function store()
    {
        $this->check->requirePermission();

        if(isset($_POST['title']) && isset($_POST['description'])) {
            $title = trim($_POST['title']);
            $description = trim($_POST['description']);
            $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;

            if(empty($title) || empty($description)) {
                echo 'Title and Description are required';
                return;
            }

            $roleModel = new Category();
            $roleModel->createCategory($title, $description, $user_id);
        }
        header('Location: /todo/category');
    }

    public function edit($params) 
    {
        $this->check->requirePermission();

        $categoryModel = new Category();
        $category = $categoryModel->getCategoryById($params['id']);

        if(!$category) {
            echo 'Category not found';
            return;
        }

        include 'app/views/todo/category/edit.php';
    }

    public function update($params)
    {
        $this->check->requirePermission();

        if(isset($params['id']) && isset($_POST['title']) && isset($_POST['description'])) {
            $id = $params['id'];
            $title = trim($_POST['title']);
            $description = trim($_POST['description']);
            $usability = isset($_POST['usability']) ? $_POST['usability'] : 0;

            if(empty($title) || empty($description)) {
                echo 'Title and Description are required';
                return;
            }

            $categoryModel = new Category();
            $categoryModel->updateCategory($id, $title, $description, $usability);
        }
        header('Location: /todo/category');
    }

    public function delete($params)
    {
        $this->check->requirePermission();
        
        $categoryModel = new Category();
        $categoryModel->deleteCategory($params['id']);

        header('Location: /todo/category');
    }
}
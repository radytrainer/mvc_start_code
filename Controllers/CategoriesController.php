<?php
require_once "Models/CategoryModel.php";
class CategoriesController extends BaseController {
    private $categories;

    public function __construct () {
        $this->categories = new CategoryModel();
    }
    public function index() {
        $categories = $this->categories->getCategories();
        $this->view('categories/categories_list', ['categories' => $categories]);
    }
}
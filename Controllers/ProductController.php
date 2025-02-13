<?php

class ProductController extends BaseController {
    public function index() {
        $this->view('products/products_list');
    }
}
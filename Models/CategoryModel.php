<?php

class CategoryModel {
    private $db;

   
    public function __construct()
    {
        $this->db = new Database("localhost", "project_one_db", "root", "");
    }
   
    public function getCategories()
    {
        $result = $this->db->query("SELECT * FROM categories");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
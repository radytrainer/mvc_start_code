<?php

class UserModel {
    private $db;

    /**
     * Constructor to initialize the database connection.
     */
    public function __construct()
    {
        $this->db = new Database("localhost", "project_one_db", "root", "");
    }

    /**
     * Retrieves all products from the database.
     *
     * @return array An associative array of all products.
     */
    public function getUsers()
    {
        $result = $this->db->query("SELECT * FROM users");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Retrieves a product by its ID.
     *
     * @param int $id The ID of the product.
     * @return array An associative array of the product.
     */
    public function getUserById($id)
    {
        $result = $this->db->query("SELECT * FROM users WHERE id = :id", [':id' => $id]);
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Adds a new product to the database.
     *
     * @param string $product_name The name of the product.
     * @param float $price The price of the product.
     * @param string $description A description of the product.
     */
    public function addUser($username, $password)
    {
        try {
            $this->db->query(
                "INSERT INTO users (username, password) VALUES (:username, :password)",
                [
                    ':username' => $username,
                    ':password' => $password
                ]
            );
        } catch (PDOException $e) {
            echo "Error adding product: " . $e->getMessage();
        }
    }

    /**
     * Updates an existing product in the database.
     *
     * @param int $id The ID of the product.
     * @param string $product_name The name of the product.
     * @param float $price The price of the product.
     * @param string $description A description of the product.
     */
    public function updateUser($id, $username, $password)
    {
        try {
            $this->db->query("UPDATE users SET username = :username, password = :password WHERE id = :id", [
                ':id' => $id,
                ':username' => $username,
                ':password' => $password
            ]);
        } catch (PDOException $e) {
            echo "Error updating product: " . $e->getMessage();
        }
    }

    /**
     * Deletes a product from the database.
     *
     * @param int $id The ID of the product.
     */
    public function deleteUser($id)
    {
        try {
            $this->db->query("DELETE FROM users WHERE id = :id", [':id' => $id]);
        } catch (PDOException $e) {
            echo "Error deleting product: " . $e->getMessage();
        }
    }
}
<?php
require_once "Models/UserModel.php";


class UserController extends BaseController
{
    private $users;

    /**
     * Constructor to initialize the product model.
     */
    public function __construct()
    {
        $this->users = new UserModel();
    }

    /**
     * Displays the home page with the list of products.
     */
    public function index()
    {
        $result = $this->users->getUsers();
        $this->view('users/user', ['users' => $result]);

    }

    /**
     * Displays the create product form.
     */
    public function create()
    {
        $this->view('users/create');
    }

    /**
     * Saves a new product to the database.
     */
    public function store()
    {
        $username = $_POST['username'];
        $password = $_POST['pswd'];
        $passwordEnypt = password_hash($password, PASSWORD_BCRYPT);
        // echo $passwordEnypt; die;
        $this->users->addUser($username, $passwordEnypt);
        $this->redirect('/user');
    }

    /**
     * Displays the edit product form.
     */
    public function edit($id)
    {
        
        $result = $this->users->getUserById($id);
        $this->view('users/edit', ['user' => $result]);
    }

    /**
     * Updates an existing product in the database.
     */
    public function update($id)
    {
        $username = $_POST['username'];
        $password = $_POST['pswd'];
        $passwordEnypt = password_hash($password, PASSWORD_BCRYPT);
        $this->users->updateUser($id, $username, $passwordEnypt);
        $this->redirect('/user');
    }

    /**
     * Deletes a product from the database.
     */
    public function destroy($id)
    {
        $this->users->deleteUser($id);
        $this->redirect('/user');
    }
}
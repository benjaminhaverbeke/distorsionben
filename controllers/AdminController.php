<?php

class AdminController
{
    public function __construct()
    {
    }
    public function deleteUser($id): void
    {
        //init manager
        $instance = new UserManager;
        $categories = $instance->delete($id);
        $route = "users";
        require 'templates/layout.phtml';
    }
    public function updateUser($id): void
    {
        //init manager
        $instance = new UserManager;
        $user = new User($_POST['name'], $_POST['email'], $_POST['password'], $_POST['role']);
        $user->setId($_GET['user']);
        $instance->update($user);
        $route = "users";
        require 'templates/layout.phtml';
    }
    public function createUser(): void
    {
        //init manager
        $instance = new UserManager;
        //get post info
        $user = new User($_POST['name'], $_POST['email'], $_POST['password'], $_POST['role']);
        $post = $instance->create($user);
        $route = "users";
        require 'templates/layout.phtml';
    }
}

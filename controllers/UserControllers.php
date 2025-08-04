<?php
require('./models/User.php');

class UserControllers {
    public function showUsers() {
        $user = new User();
        $users = $user->getAllUsers();
        include('./views/users.php');
    }
}
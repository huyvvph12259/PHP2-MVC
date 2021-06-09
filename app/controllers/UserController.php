<?php
    namespace App\Controllers;

use App\Models\User;

class UserController{
        public function index(){
            $users = User::all();
            include_once './app/views/clients/userpage.php';
        }
    }

?>
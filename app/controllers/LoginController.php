<?php
namespace App\Controllers;

use App\Models\User;

class LoginController extends BaseController{
    public function loginForm(){
        // var_dump(password_hash('123456',PASSWORD_DEFAULT));
        $this->render('auth.login');
    }
    public function postLogin(){
        $msg = isset($_GET['msg']) ?$_GET['msg'] : "";
        $this->render('auth.login', compact('msg'));
        # Lấy data từ form
        $email = $_POST['email'];
        $password = $_POST['password'];

        # dựa vào email để lấy ra user
        $user = User::where('email', $email)->first();
        # nếu user không tồn tại #####và password nhập đúng với password trong db####
        if(!$user){
            header('location: ' . BASE_URL . 'login?msg=Email hoặc mật khẩu không tồn tại');
            die;
        }
        if( password_verify($password, $user->password)){
            # tạo session
            $_SESSION['AUTH'] =  [
                'id' => $user->id,
                'email' => $user->email,
                'name' => $user->name,
                'role' => $user->role
            ];
            header('location: ' . BASE_URL. 'danh-muc');
            die;
            
        }
        header('location: ' . BASE_URL . 'login?msg=Email hoặc mật khẩu không đúng');
            die;
        
    }

    public function logout(){
        unset($_SESSION[AUTH]);
        header('location: ' . BASE_URL);
        die;
    }
    
}


?>



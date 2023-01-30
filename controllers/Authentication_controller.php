<?php 

class AuthenticationController extends BaseController
{
    private $model;

    function __construct()
    {
        
        $this->model = $this->load_model('Main');
    }

    public function register_user(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if($this->model->check_if_exists('tbl_users', '*', ['email_address'=>$_POST['email_address']]) || $this->model->check_if_exists('tbl_users', '*', ['username'=>$_POST['username']])){
                echo json_encode('user exists');
            }else{

                $data = [
                    'username' => $_POST['username'],
                    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                    'email_address' => $_POST['email_address'],
                ];
                $this->model->insert_data('tbl_users', $data);
                echo json_encode('registered');
            }
        }
    }
    public function login_user(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if($this->model->check_if_exists('tbl_users', '*', ['email_address'=>$_POST['username']])){
                $user = $this->model->retrieve_row('tbl_users', '*', ['email_address'=>$_POST['username']]);
                
                if(password_verify($_POST['password'], $user->password)){
                    echo json_encode('logged in');
                }else{
                    echo json_encode('wrong password');
                }
                $this->createSession($user);
            }else if($this->model->check_if_exists('tbl_users', '*', ['username'=>$_POST['username']])){
                $user = $this->model->retrieve_row('tbl_users', '*', ['username'=>$_POST['username']]);
                if(password_verify($_POST['password'], $user->password)){
                    echo json_encode('logged in');
                }else{
                    echo json_encode('wrong password');
                }
                $this->createSession($user);
            }else{
                echo json_encode('user does not exist');
            }
        }
    }

    public function createSession($user){
        $_SESSION['loggedin'] = true;
        $_SESSION['user_id'] = $user->id;
        $_SESSION['username'] = $user->username;
        $_SESSION['email_address'] = $user->email_address;       
    }

    public function logout(){
        unset($_SESSION['loggedin'],$_SESSION['user_id'],$_SESSION['username'],$_SESSION['email_address']);
    }
}

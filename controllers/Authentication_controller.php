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
                echo json_encode('A user with a similar username or email address exists');
            }else{
                $data = [
                    'username' => $_POST['username'],
                    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                    'email_address' => $_POST['email_address'],
                ];
                $id = $this->model->insert_data('tbl_users', $data, true);
                $user = [
                    'id' => $id,
                    'username' => $_POST['username'],
                    'email_address' => $_POST['email_address'],
                ];
                $user = (object)$user;
                $this->createSession($user);
                echo json_encode('registered');
            }
        }
    }
    public function login_user(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if($this->model->check_if_exists('tbl_users', '*', ['email_address'=>$_POST['username']])){
                $user = $this->model->retrieve_row('tbl_users', '*', ['email_address'=>$_POST['username']]);
                
                if(password_verify($_POST['password'], $user->password)){
                    $this->createSession($user);
                    echo json_encode('logged in');
                }else{
                    echo json_encode('The password/username is wrong!');
                }
            }else if($this->model->check_if_exists('tbl_users', '*', ['username'=>$_POST['username']])){
                $user = $this->model->retrieve_row('tbl_users', '*', ['username'=>$_POST['username']]);
                if(password_verify($_POST['password'], $user->password)){
                    $this->createSession($user);
                    echo json_encode('logged in');
                }else{
                    echo json_encode('The password/username is wrong!');
                }
            }else{
                echo json_encode('User does not exist!');
            }
        }
    }

    public function change_details(){

    }

    public function delete_account(){

    }

    public function createSession($user){
        $_SESSION['loggedin'] = true;
        $_SESSION['user_id'] = $user->id;
        $_SESSION['username'] = $user->username;
        $_SESSION['email_address'] = $user->email_address;       
    }

    public function logout(){
        unset($_SESSION['loggedin'],$_SESSION['user_id'],$_SESSION['username'],$_SESSION['email_address']);
        $this->redirect('main/landing_page');
    }
    
}

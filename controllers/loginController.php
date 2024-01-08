<?php
class loginController extends Controller {
    public function index() {
        $data = array();

        if(!empty($_POST['number'])) {
            $unumber = $_POST['number'];
            $upass = $_POST['password'];

            $users = new Users();

            if($users->verifyUser($unumber, $upass)) {

            }else {
                $data['msg'] = 'Número e/ou senha inválidos!';
            }
        }

        $this->loadView('login', $data);
    }
}
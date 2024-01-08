<?php
class homeController extends Controller {

    private $user;

    public function __construct() {
        parent::__construct();

        $this->user = new Users();
        if($this->user->checkLogin()) {

        }
    }
    
    public function index() {
        $data = array();
        // verificando o token em tela
        // print_r($_SESSION['token']);

        $this->loadTemplate('home', $data);
    }

}
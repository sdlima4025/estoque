<?php
class homeController extends Controller {

    private $user;

    public function __construct() {
        parent::__construct();

        $this->user = new Users();
        if(!$this->user->checkLogin()) {
            header("Location ".BASE_URL."login");
            exit;
        }
    }
    
    public function index() {
        $data = array();
        $p = new Products();

        $data['list'] = $p->getProducts();
        // verificando o token em tela
        // print_r($_SESSION['token']);

        $this->loadTemplate('home', $data);
    }

}
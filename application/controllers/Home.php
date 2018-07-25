<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('m_default');
        $this->loggedin=$this->general->checkLogged();
    }
	public function index()
	{
		$data['loggedin']=$this->loggedin;
		$data['promo']=$this->m_default->getPromo(['IsActive'=>true],[]);
		$data['categories']=$this->m_default->getCategories([],['limit'=>4,'sort'=>['Createdtime'=>1]]);
		$data['newarrival']=$this->m_default->getCategories([],['limit'=>4,'sort'=>['Createdtime'=>1]]);
		$this->load->view('home',$data);
	}	
	public function registrasiUser()
	{
		$result=$this->general->registerUser($_POST['user'],$_POST['email'],$_POST['pass'],'checkexist');
		if(count(json_decode($result))==0)
		{
			$_idUser=$this->general->registerUser($_POST['user'],$_POST['email'],$_POST['pass'],'insertuser');
			echo $_idUser;
			$this->email->from('sitompulsalomo@gmail.com','Raja Salomo Sitompul');
			$this->email->to($_POST['email']);
			$this->email->cc('sitompulsalomo@gmail.com');
			$this->email->bcc('sitompulsalomo2@gmail.com');
			$this->email->subject('Email Test');
			$this->email->message('Testing the email class.');

			$this->email->send();
		}
	}
	public function loginUser()
	{
		$this->general->loginUser($_POST['user'],$_POST['pass']);
	}
	public function logoutUser()
	{
		unset($_SESSION['UserData']);
		redirect('/');
	}
}
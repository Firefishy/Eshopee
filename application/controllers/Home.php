<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('Mdefault');
        $this->loggedin=$this->general->checkLogged();
    }
	public function index()
	{
		$data['loggedin']=$this->loggedin;
		$data['promo']=$this->Mdefault->getPromo(['IsActive'=>true],[]);
		$data['categories']=$this->Mdefault->getCategories([],['limit'=>4,'sort'=>['Createdtime'=>1]]);
		$this->load->view('home',$data);
	}	
	public function registrasiUser()
	{
		header('Access-Control-Allow-Origin: *');
		$result=$this->general->registerUser($_POST['user'],$_POST['email'],$_POST['pass'],'checkexist');
		if(count(json_decode($result))==0)
		{
			$_idUser=$this->general->registerUser($_POST['user'],$_POST['email'],$_POST['pass'],'insertuser');
			
			require 'vendor/autoload.php';

			$from = new SendGrid\Email(null, EMAILSENDGRID);
			$subject = "Kenji Shop - Email Confirmation";
			$to = new SendGrid\Email(null, $_POST['email']);
			$content = new SendGrid\Content("text/html", 'You have already registered, but you must confirm this email for log in to your account. <a href="'.base_url().'?ConfirmEmail=5b46b6f06b77ddc124672887">Confirm your account</a>');
			$mail = new SendGrid\Mail($from, $subject, $to, $content);

			$apiKey = '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';
			$sg = new \SendGrid($apiKey);
			$response = $sg->client->mail()->send()->post($mail);
		}
	}
	public function loginUser()
	{
		$this->general->loginUser($_POST['user'],$_POST['pass']);
	}
	public function logoutUser()
	{
		unset($_SESSION['UserData']);
		redirect(base_url());
	}
}

<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
    public $data = array('pesan'=>'');
    public function __construct(){
		parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('model_login','login',TRUE);
    }
    public function index(){
        if($this->session->userData('login')==TRUE){
            redirect('absen');
        }else{
            if($this->login->validasi()){
                if($this->login->cek_user()){
                    redirect('absen');
                }else{
                    $this->data['pesan'] = 'Username atau password salah.';
                    $this->load->view('login/form_login',$this->data);
                }
            }else{
                $this->load->view('login/form_login',$this->data);
            }
        }
    }
    public function logout(){
        $this->login->logout();
        redirect('login');
    }
}
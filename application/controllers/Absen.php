<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {
    public $data = array(
                            'modul'=>'',
                            'breadcrumb'=>'',
                            'breadcrumb_aktif'=>'',
                            'pesan'=>'',
                            'pagination'=>'',
                            'tabel_data'=>'',
                            'tabel_view'=>'',
                            'main_view'=>'',
                            'form_action'=>'',
                            'form_value'=>''
                        );
    public function __construct(){
		parent::__construct();
        $this->load->model('Model_absen');
	}
    public function index(){
        $data = array(
                        'main_view'=>'absen/index',
                        'title'=>'Absen',
                        'breadcrumb'=>'Absen',
                        'breadcrumb_aktif'=>'Index',
                        'table_view'=>'absen/table'
        );
        $data['rows'] = $this->Model_absen->data_absen()->result();
        $this->load->view('layouts/template',$data);
    }
}
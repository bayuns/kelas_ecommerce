<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_absen extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function data_absen(){
        return $this->db->get('absen');
    }
}
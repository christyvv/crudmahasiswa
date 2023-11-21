<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hitungbuku extends CI_Controller 
{
    function __construct()
	{
		parent::__construct();
        $this->load->library('library');
	}
	function index()
	{
        $this->library->buku('150', '300', '100', '200');
	}
}
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anuncio_model extends CI_Model {

	public $data;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}

	public function guardarAnuncio($data)
	{
		$this->db->insert('Anuncio', $data);
	}

	public function prensetarAnuncio()
	{
		
    	$query = $this->db->get('Anuncio');

    	return $query->result();
    }

public function number()
{
	$number = $this->db->get('Anuncio')->num_rows();
	return intval($number);

}

public function get_pagination($page)
{
	return $this->db->get('Anuncio',$page, $this->uri->segment(3));
}


}

/* End of file Anuncio_model.php */
/* Location: ./application/models/Anuncio_model.php */
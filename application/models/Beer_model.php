<?php
class Beer_model extends CI_Model {
	 
	 public function __construct()
	 {
		 $this->load->database();
	 }
	 
	 public function get_beer($barcode = FALSE)
{
        if ($barcode === FALSE)
        {
                $query = $this->db->get('beer');
                return $query->result_array();
        }

        $query = $this->db->get_where('beer', array('barcode' => $barcode));
        return $query->row_array();
}
	public function set_beer()
	{
	$this->load->helper('url');

    $barcode_slug = url_title($this->input->post('barcode'), 'dash', TRUE);

    $data = array(
        'barcode' => $barcode_slug,
        'name' => $this->input->post('name'),
        'beer_type' => $this->input->post('beer_type'),
		'brewery' => $this->input->post('brewery')
    );

    return $this->db->insert('beer', $data);	
	}
}
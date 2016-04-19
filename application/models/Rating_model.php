<?php
class Rating_model extends CI_Model {
	 
	 public function __construct()
	 {
		 $this->load->database();
	 }
	 
	 public function get_rating($user_id = FALSE, $beer_id = FALSE)
{
		if ($user_id === FALSE AND $beer_id === FALSE )
		{
			#$query = $this->db->get('user_beer');
			$this->db->select('users.username, beer.name as "beername", user_beer.rating');
			$this->db->from('user_beer');
			$this->db->join('users', 'users.id = user_beer.user_id');
			$this->db->join('beer', 'beer.id = user_beer.beer_id');
			$query = $this->db->get();			
			return $query->result_array();	
		}
		
        if ($beer_id === FALSE AND $user_id != FALSE)
        {
                $query = $this->db->get('beer');
                return $query->result_array();
        }
		
		if ($beer_id != FALSE AND $user_id === FALSE)
		{
			
		}

        $query = $this->db->get_where('user_beer', array('user_id' => $user_id, 'beer_id' => $beer_id));

		
        return $query->row_array();
}


	public function set_rating()
	{

    $data = array(
        'user_id' => $this->ion_auth->user()->row()->id,
        'beer_id' => $this->input->post('beer_id'),
        'rating' => $this->input->post('rating')
    );

    return $this->db->insert('user_beer', $data);	
	}
}
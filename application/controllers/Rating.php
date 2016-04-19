<?php
	class Rating Extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('rating_model');
                $this->load->helper('url_helper');
        }
	public function index()
        {
                $data['ratings'] = $this->rating_model->get_rating();
		        $data['title'] = 'Ratings';

				$this->load->view('templates/header', $data);
				$this->load->view('rating/index', $data);
				$this->load->view('templates/footer');
        }
	public function view($user_id = NULL, $beer_id = NULL) 
	{
            $data['rating_item'] = $this->rating_model->get_rating($user_id, $beer_id);
			$data['title'] = 'Beer rating archive';

			if (empty($data['rating_item']))
			{
                show_404();
			}

			$data['barcode'] = $data['beer_item']['barcode'];

			$this->load->view('templates/header', $data);
			$this->load->view('rating/view', $data);
			$this->load->view('templates/footer');				
	}
	
	public function create()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->library('ion_auth');			
			
			if (!$this->ion_auth->logged_in())
			{
			redirect('auth/login');
			}

			$data['title'] = 'Rate a beer';

			$this->form_validation->set_rules('user_id', 'User Id', 'required');
			$this->form_validation->set_rules('beer_id', 'Beer Id', 'required');
			$this->form_validation->set_rules('rating', 'Rating', 'required|integer|greater_than[0]|less_than_equal_to[5]');
			
			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header', $data);
				$this->load->view('rating/create');
				$this->load->view('templates/footer');

			}
			else
			{
				$this->rating_model->set_rating();
				$this->load->view('rating/success');
			}
		}
	
	}
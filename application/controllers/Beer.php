<?php
class Beer extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('beer_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['beer'] = $this->beer_model->get_beer();
		        $data['title'] = 'Beer archive';

				$this->load->view('templates/header', $data);
				$this->load->view('beer/index', $data);
				$this->load->view('templates/footer');
        }

        public function view($barcode = NULL)
        {
            $data['beer_item'] = $this->beer_model->get_beer($barcode);
			$data['title'] = 'Beer archive';

			if (empty($data['beer_item']))
			{
                show_404();
			}

			$data['barcode'] = $data['beer_item']['barcode'];

			$this->load->view('templates/header', $data);
			$this->load->view('beer/view', $data);
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

			$data['title'] = 'Create a beer';

			$this->form_validation->set_rules('name', 'Name', 'required');
			#$this->form_validation->set_rules('brewery', 'Brewery', 'required');
			#$this->form_validation->set_rules('beer_type', 'Beer type', 'required');
			$this->form_validation->set_rules('barcode', 'Barcode', 'required');

			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header', $data);
				$this->load->view('beer/create');
				$this->load->view('templates/footer');

			}
			else
			{
				$this->beer_model->set_beer();
				$this->load->view('beer/success');
			}
		}		
}
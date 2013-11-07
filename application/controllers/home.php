<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {

	public function __construct() { // call to the parent Controller class so all methods are available
  		parent::__construct();
  		$this->load->helper('url');
      $this->load->model('Galleries_model');
      $this->load->library('pagination');
  	}

  	public function index() {
  		$this->load->view('main_header.php');
  		$this->load->view('main_content.php');
  		$this->load->view('footer.php');
  	}

  	public function portfolio() {
  		$config['base_url'] = 'http://localhost:8888/clairejonesphotography/home/portfolio/';      
  		$config['total_rows'] = $this->Galleries_model->record_count();
      $config['per_page'] = 9;
      $config['uri_segment'] = 3;
      $choice = $config['total_rows'] / $config['per_page'];
      $config['num_links'] = round($choice);

      $this->pagination->initialize($config);
      $page = ($this->uri->segment(3));
  
      $data['results'] = $this->Galleries_model->fetch_nature_thumbnails($config['per_page'], $page);
      $data['links'] = $this->pagination->create_links();
   
  		
  		$this->load->view('portfolio_header.php');
      $this->load->view('portfolio_content_nature', $data);
    	$this->load->view('footer.php');  		
  	}

    public function wildlife() {
      $config['base_url'] = 'http://localhost:8888/clairejonesphotography/home/portfolio/wildlife';      
      $config['total_rows'] = $this->Galleries_model->record_count();
      $config['per_page'] = 9;
      $config['uri_segment'] = 4;
      $choice = $config['total_rows'] / $config['per_page'];
      $config['num_links'] = round($choice);

      $this->pagination->initialize($config);
      $page = ($this->uri->segment(4));
  
      $data['results'] = $this->Galleries_model->fetch_wildlife_thumbnails($config['per_page'], $page);
      $data['links'] = $this->pagination->create_links();
   
      
      $this->load->view('portfolio_header.php');
      $this->load->view('portfolio_content_wildlife', $data);
      $this->load->view('footer.php');      
    }

    public function wedding() {
      $config['base_url'] = 'http://localhost:8888/clairejonesphotography/home/portfolio/wedding';      
      $config['total_rows'] = $this->Galleries_model->record_count();
      $config['per_page'] = 9;
      $config['uri_segment'] = 4;
      $choice = $config['total_rows'] / $config['per_page'];
      $config['num_links'] = round($choice);

      $this->pagination->initialize($config);
      $page = ($this->uri->segment(4));
  
      $data['results'] = $this->Galleries_model->fetch_wedding_thumbnails($config['per_page'], $page);
      $data['links'] = $this->pagination->create_links();
   
      
      $this->load->view('portfolio_header.php');
      $this->load->view('portfolio_content_wedding', $data);
      $this->load->view('footer.php');      
    }

    public function portraits() {
      $config['base_url'] = 'http://localhost:8888/clairejonesphotography/home/portfolio/portraits';      
      $config['total_rows'] = $this->Galleries_model->record_count();
      $config['per_page'] = 9;
      $config['uri_segment'] = 4;
      $choice = $config['total_rows'] / $config['per_page'];
      $config['num_links'] = round($choice);

      $this->pagination->initialize($config);
      $page = ($this->uri->segment(4));
  
      $data['results'] = $this->Galleries_model->fetch_portrait_thumbnails($config['per_page'], $page);
      $data['links'] = $this->pagination->create_links();
   
      
      $this->load->view('portfolio_header.php');
      $this->load->view('portfolio_content_portrait', $data);
      $this->load->view('footer.php');      
    }

    public function landscape() {
      $config['base_url'] = 'http://localhost:8888/clairejonesphotography/home/portfolio/landscape';      
      $config['total_rows'] = $this->Galleries_model->record_count();
      $config['per_page'] = 9;
      $config['uri_segment'] = 4;
      $choice = $config['total_rows'] / $config['per_page'];
      $config['num_links'] = round($choice);

      $this->pagination->initialize($config);
      $page = ($this->uri->segment(4));
  
      $data['results'] = $this->Galleries_model->fetch_landscape_thumbnails($config['per_page'], $page);
      $data['links'] = $this->pagination->create_links();
   
      
      $this->load->view('portfolio_header.php');
      $this->load->view('portfolio_content_landscape', $data);
      $this->load->view('footer.php');      
    }

  	public function about() {
  		$this->load->view('about_header.php');
    	$this->load->view('about_content.php');
    	$this->load->view('footer.php');  		
  	}

  	public function contact() {
		  $this->load->view('contact_header.php');
  		$this->load->view('contact_content.php');
  		$this->load->view('footer.php');  		
  	}
}
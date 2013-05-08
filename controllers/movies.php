<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Movies extends MY_Controller {

        function __construct() {
            parent::__construct();

            $this->load->model('movie_model','movies',true);
            
        }
    
	function index() {
                
                $movieList = $this->movies->getAll();

                $this->load->view('header',array('ctrl'=>$this->ctrl,'activeMenuItem'=>$this->activeMenuItem));
                $this->load->view('item_list',array('itemList'=>$movieList,'mod'=>strtolower(get_class($this))));
		$this->load->view('footer');
	}
        
	function details($id) {
                
                $details = $this->movies->get($id);

                $this->load->view('header',array('ctrl'=>$this->ctrl,'activeMenuItem'=>$this->activeMenuItem));
                $this->load->view('item_details',array('details'=>$details,'mod'=>strtolower(get_class($this))));
		$this->load->view('footer');
	}
        
}
